$(function(){
  // comprobamos si existe la variable htmlSession con html de la session del square
  if(typeof htmlSession != "undefined" && htmlSession && htmlSession != "" && htmlSession != "undefined"){
    $("#wrapper-square").replaceWith(htmlSession);
    //$("#wrapper-square").html(htmlSession);
  }

  // funcionalidad para hacer draggable los elementos de las herramientas y los que esten dentro también
  var dropzone = document.getElementById('dropzone');
  // target elements with the "draggable" class
  interact('.draggable')
    .draggable({
      // enable inertial throwing
      //inertia: true,
      // keep the element within the area of it's parent
      restrict: {
        restriction: dropzone,
        endOnly: true,
        elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
      },
      // enable autoScroll
      autoScroll: true,

      // call this function on every dragmove event
      onmove: dragMoveListener,
      // call this function on every dragend event
      onend: function (event) {

      }
    }).resizable({
      preserveAspectRatio: false,
      edges: { left: true, right: true, bottom: false, top: false }
    }).on('resizemove', function (event) {
      var target = event.target,
          x = (parseFloat(target.getAttribute('data-x')) || 0),
          y = (parseFloat(target.getAttribute('data-y')) || 0);

      // update the element's style
      target.style.width  = event.rect.width + 'px';
      target.style.height = event.rect.height + 'px';

      // translate when resizing from top or left edges
      x += event.deltaRect.left;
      y += event.deltaRect.top;

      target.style.webkitTransform = target.style.transform =
          'translate(' + x + 'px,' + y + 'px)';

      target.setAttribute('data-x', x);
      target.setAttribute('data-y', y);
      //target.textContent = Math.round(event.rect.width) + '×' + Math.round(event.rect.height);
      var textHtml = $("#wrapper-square")[0].outerHTML;
      updateSquare({"sq_htmlcontent":textHtml});
    });

});

function dragMoveListener (event) {
  var target = event.target,
      // keep the dragged position in the data-x/data-y attributes
      x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
      y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

  // translate the element
  target.style.webkitTransform =
  target.style.transform =
    'translate(' + x + 'px, ' + y + 'px)';

  // update the posiion attributes
  target.setAttribute('data-x', x);
  target.setAttribute('data-y', y);
  var textHtml = $("#wrapper-square")[0].outerHTML;
  updateSquare({"sq_htmlcontent":textHtml});
}
window.dragMoveListener = dragMoveListener;


function updateSquare(dataSquare,save){
  if(typeof dataSquare === "object"){
    var titulo = $("#titulo-square").val();
    var desc = $("#descripcion-square").val();
    if(!save){
      var objUpdate = {"data": dataSquare,"titulo":titulo,"descripcion":desc};
    }else{
      var tags = $("#tags").val();
      var objUpdate = {"data": dataSquare,"titulo":titulo,"descripcion":desc,"tags":tags,"img":""};
    }
    $.ajax({
      url: "../controller/UpdateSquare.php",
      type: "POST",
      data: objUpdate,
      success: function(data){
          // done
      },
      error: function(x,h,r){
          console.log(x,h,r);
      }
    })
  }
}

function SaveSquare(userid,squareid){
  var textHtml = $("#wrapper-square")[0].outerHTML;
  var obJson = {"sq_htmlcontent":textHtml};
  var titulo = $("#titulo-square").val();
  var desc = $("#descripcion-square").val();
  var tags = $("#tags").val();
  var img = "square_"+squareid+".png";
  var objUpdate = {"data": obJson,"titulo":titulo,"descripcion":desc,"img":img,"tags":tags};
  $.ajax({
    url: "../controller/UpdateSquare.php",
    type: "POST",
    data: objUpdate,
    success: function(data){
        // done
        // guardamos la foto del square
        html2canvas(document.getElementById("wrapper-square"), {
            onrendered: function(canvas) {
              var img = canvas.toDataURL("image/png");
              // document.body.appendChild(canvas);
              $.ajax({
                url:"../mode/saveThumb.php",
                type:"POST",
                data: {"image":img,"id":squareid,"borrar":true},
                success: function(data){
                  alert("Tu Square se ha guardado correctamente");
                  window.location.href = "user.php?usr_id="+userid;
                },
                error: function(x,h,r){
                  alert("problem");
                }
              });
            }
        });
    },
    error: function(x,h,r){
        console.log(x,h,r);
    }
  });
}

function SaveSquareSession(squareid){
  var textHtml = $("#wrapper-square")[0].outerHTML;
  var obJson = {"sq_htmlcontent":textHtml};
  updateSquare(obJson,true);
  // var tags = $("#tags").val();
  // guardamos la foto del square
  html2canvas(document.getElementById("wrapper-square"), {
      onrendered: function(canvas) {
        var img = canvas.toDataURL("image/png");
        // document.body.appendChild(canvas);
        $.ajax({
          url:"../mode/saveThumb.php",
          type:"POST",
          data: {"image":img,"id":squareid},
          success: function(data){
            window.location.href = "signUp.php";
          },
          error: function(x,h,r){
            alert("problem");
          }
        });
      }
  });
}
