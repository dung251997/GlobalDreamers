// DISPLAY IMAGE FILENAME
$(".browse-button input:file").change(function () {
    $("input[name='attachment']").each(function () {
        var fileName = $(this).val().split('/').pop().split('\\').pop();
        $(".filename").val(fileName);
        $(".browse-button-text").html('<i class="fa fa-refresh"></i> Change');
        $(".clear-button").show();
    });
    $('input[type=file]').change(function () {
        console.log(this.files[0].mozFullPath);
    });
});
var tgt;
document.getElementById('avatarField').onchange = function (evt) {
    tgt = evt.target || window.event.srcElement,
        files = tgt.files;

}
$('.avatar-button').click(function () {
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('avatar').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
        $('.filename').val("");
        $('.clear-button').hide();
        $('.browse-button input:file').val("");
        $(".browse-button-text").html('<i class="fa fa-folder-open"></i> Browse');
    } else {}
});

//actions happening when the button is clicked
$('.clear-button').click(function () {
    $('.filename').val("");
    $('.clear-button').hide();
    $('.browse-button input:file').val("");
    $(".browse-button-text").html('<i class="fa fa-folder-open"></i> Browse');
});