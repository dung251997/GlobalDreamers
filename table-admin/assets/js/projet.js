$(document).ready(function () {
  var btns = document.querySelectorAll(".btn");
  var texts = document.querySelectorAll(".expland");
  var tempScrollTop = $(window).scrollTop();

  btns.forEach(function (el) {
    el.addEventListener("click", function () {
      var elem = el.text;
      var $target = $('html,body');
      $target.animate({scrollTop: $target.height()}, tempScrollTop);
      if (elem == "Read more") {
        //Stuff to do when btn is in the read more state
        el.innerHTML = 'Read less';
        texts.forEach(function(txt){
          if((txt.id).includes(el.id)){
            $("#"+txt.id +"").slideDown();
          }
        });
        // $(texts[0].id).slideDown();
      } else {
        //Stuff to do when btn is in the read less state
        el.innerHTML = 'Read more';
        texts.forEach(function(txt){
          if((txt.id).includes(el.id)){
            $("#"+txt.id +"").slideUp();
          }
        });
        // $(texts[0].id).slideUp();
      }
      $target.animate({scrollTop: $target.height()}, tempScrollTop);
    });
  });
});