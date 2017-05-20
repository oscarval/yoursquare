$(function(){
    /* Funcionalidad para colapsar los elementos*/
    $(".header-collapse").click(function(event){
      var elem = event.target;
      if($(elem).find(".collapse-hide").length > 0){
        $(elem).find(".collapse-hide").html("&#8593;");
        $(elem).find(".collapse-hide").addClass("collapse-show");
        $(elem).find(".collapse-hide").removeClass("collapse-hide");
      }else{
        $(elem).find(".collapse-show").html("&#8595;");
        $(elem).find(".collapse-show").addClass("collapse-hide");
        $(elem).find(".collapse-show").removeClass("collapse-show");
      }
      $(elem).parent().find("#items").toggle();
    });

    var drake = dragula({
      copy: true
    }).on('drop', function (el) {
      $(el).addClass("draggable");
      new Medium({
          element: el,
          mode: Medium.inlineMode,
          maxLength: 25
      });
    });
    drake.containers.push(document.querySelector("#items"));
    drake.containers.push(document.querySelector("#dropzone"));

    interact('.draggable').on('doubletap', function (event) {
    console.log("d");
      $(event.target).focus();
      event.preventDefault();
    });



});
