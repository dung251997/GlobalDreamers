// DISPLAY IMAGE FILENAME
$('#image').on('change',function(){
    var fileName = $(this).val();
    var path = "C:\\fakepath\\" + fileName;
    var file = path.replace(/^.*\\/, "");
    $(this).next('.custom-file-label').html(file);
})