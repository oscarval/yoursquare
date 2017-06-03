$(function(){
    // GLOBAL VARIABLES
    var selectedElement = null;

    /* Funcionalidad para colapsar los elementos*/
    $(".header-collapse").click(function(event){
      var elem = event.target;
      if($(elem).hasClass("arrowDown")){
        $(elem).addClass("arrowUp");
        $(elem).removeClass("arrowDown");
      }else{
        $(elem).addClass("arrowDown");
        $(elem).removeClass("arrowUp");
      }
      $(elem).parent().find(".items").toggle();
    });

    var drake = dragula({
      copy: true
    }).on('drop', function (el) {
      $(el).addClass("draggable");
      new Medium({
          element: el,
          mode: Medium.partialMode
      });
      var textHtml = $("#wrapper-square")[0].outerHTML;
      updateSquare({"sq_htmlcontent":textHtml});
    });

    // contenedores de los elentos arrastrables
    drake.containers.push(document.querySelector("#items-p"));
    drake.containers.push(document.querySelector("#items"));
    drake.containers.push(document.querySelector("#dropzone"));

    // cuando se realiza un doble click para editarlo
    interact('.draggable').on('doubletap', function (event) {
      $(event.target).focus();
      $(event.target).removeClass("draggable");
      $(event.target).focusout(function(){
        $(event.target).addClass("draggable");
        var textHtml = $("#wrapper-square")[0].outerHTML;
        updateSquare({"sq_htmlcontent":textHtml});
        resetTools();
      })
      event.preventDefault();
    });

    function resetTools(){
      $("#fuente-font-text").val("Arial");
      $("#range-size").val("16");
      $("#color-style").val("#ffffff");
    }


    // seleccionar el elemento de dropzone
    interact('.draggable').on('tap', function (event) {
      selectedElement = event.target;
      event.preventDefault();
    });


    // para cambiar el tipo de letra
    $("#fuente-font-text").change(function(event){
      console.log(this.value);
      $(selectedElement).css("font-family",this.value);
      var textHtml = $("#wrapper-square")[0].outerHTML;
      updateSquare({"sq_htmlcontent":textHtml});
    });

    // para cambiar el tamaño de letra
    $("#range-size").change(function(event){
      $(selectedElement).css("font-size",event.target.value+"px");
      var textHtml = $("#wrapper-square")[0].outerHTML;
      updateSquare({"sq_htmlcontent":textHtml});
    });
    // para cambiar el color de letra
    $("#color-style").change(function(event){
      $(selectedElement).css("color",event.target.value);
      var textHtml = $("#wrapper-square")[0].outerHTML;
      updateSquare({"sq_htmlcontent":textHtml});
    });

    // para cambiar el fondo
    $("#fondo-background-square").change(function(event){
      $("#wrapper-square").attr("class",this.value);
      var textHtml = $("#wrapper-square")[0].outerHTML;
      updateSquare({"sq_htmlcontent":textHtml});
    });

    // para reiniciar las herramientas
    $("#resetTools").click(function(){
        resetTools();
    });

});
