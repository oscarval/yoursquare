$(document).ready(function() {
  $(function() {
    
    var split = function( val ) {
      return val.split( "," );
    };

    var extractLast = function( term ) {
      return split( term ).pop();
    };

    $( "#tags" ).on( "keydown", function( event ) {
      if ( event.keyCode === $.ui.keyCode.TAB && $( this ).autocomplete( "instance" ).menu.active ) {
        event.preventDefault();
      }
    }).autocomplete({
      source: function( request, response ) {
        response( $.ui.autocomplete.filter(
          tagsList, extractLast( request.term ) ) );
        },
        focus: function() {
          return false;
        },
        select: function( event, ui ) {
          var terms = split( this.value );
          terms.pop();
          terms.push( ui.item.value );
          terms.push( "" );
          this.value = terms.join( "," );
          return false;
        }
      });
    });
  });
