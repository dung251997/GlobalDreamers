// DISPLAY IMAGE FILENAME
$(".browse-button input:file").change(function (){
    $("input[name='attachment']").each(function() {
      var fileName = $(this).val().split('/').pop().split('\\').pop();
      $(".filename").val(fileName);
      $(".browse-button-text").html('<i class="fa fa-refresh"></i> Change');
      $(".clear-button").show();
    });
  });
  
  //actions happening when the button is clicked
  $('.clear-button').click(function(){
      $('.filename').val("");
      $('.clear-button').hide();
      $('.browse-button input:file').val("");
      $(".browse-button-text").html('<i class="fa fa-folder-open"></i> Browse'); 
  }); 

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});
$(document).ready(function() {
    $('#addTagBtn').click(function() {
        $('#tags option:selected').each(function() {
            $(this).appendTo($('#selectedTags'));
        });
    });
    $('#removeTagBtn').click(function() {
        $('#selectedTags option:selected').each(function(el) {
            $(this).appendTo($('#tags'));
        });
    });
    $('.tagRemove').click(function(event) {
        event.preventDefault();
        $(this).parent().remove();
    });
    $('ul.tags').click(function() {
        $('#search-field').focus();
    });
    $('#search-field').keypress(function(event) {
        if (event.which == '13') {
            if (($(this).val() != '') && ($(".tags .addedTag:contains('" + $(this).val() + "') ").length == 0 ))  {
                    $('<li class="addedTag">' + $(this).val() + '<span class="tagRemove" onclick="$(this).parent().remove();">x</span><input type="hidden" value="' + $(this).val() + '" name="tags[]"></li>').insertBefore('.tags .tagAdd');
                    $(this).val('');

            } else {
                $(this).val('');

            }
        }
    });

});