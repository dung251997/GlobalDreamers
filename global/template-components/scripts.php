    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/jquery.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/foundation.js"></script>
    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/app.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.core.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.keyboard.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.motion.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.timer.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.imageLoader.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.util.touch.min.js"></script>
	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation.orbit.min.js"></script>
   	<script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation-datepicker.min.js"></script>	
    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/foundation-datepicker.fr.js"></script>	  
    <script src="https://s3-eu-west-1.amazonaws.com/gd-v2-staging/js/plugins/owl.carousel.min.js"></script>     
	<script type="text/javascript">
	 /* BEGIN : MENU DROPDOWN & MOBILE */
		var dropdown = document.getElementsByClassName("dropdown_mobile");
		var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		    this.classList.toggle("active_drop");
		    var dropdownContent = this.nextElementSibling;
		    if (dropdownContent.style.display === "block") {
		      dropdownContent.style.display = "none";
		    } else {
		      dropdownContent.style.display = "block";
		    }
		  });
		}





$(document).ready(function()
{


    $(window).scroll((event) => {

        $(".subMenu").hide();

        let scroll = $(window).scrollTop();


		if ($(window).width() > 1024) 
		{
			

	        if (scroll > 310) { // display the menu
	            $('.goToTop').show({
	                duration: 400
	            });
	        } else { // hide the menu
	            $('.goToTop').hide({
	                duration: 400
	            });
	        }
        }
      
    });




});




	$(".goToTop").click(function() 
  	{
		$('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;

  	});

	


	  $( ".subMenuLink" ).hover(function() 
	  {

	  	if($(".subMenu3").css('display') != 'none' )
	  	{
	  		$(".subMenu3").hide();
	  	}

	  	var idLink = $(this).attr('id');


		if(idLink == "subMenuProfil")
	  	{
		   $( "#subMenuProfil .profilContainer" ).toggleClass();	

	  	   var widthMenu = $("#subMenuProfil").width();
	  	   var widthMenu2 = widthMenu;
	  	   if(widthMenu < 200)
	  	   {
	  	   	widthMenu = 200;
	  	   }
   		 	$( this ).children( "div" ).css("width", widthMenu);
   		 	var position = $("#subMenuProfil").offset();
   		 	var diff = 200-widthMenu2;
		 	var leftPosition = position.left-10;
   		 	var widthDocument = $(document).width();

   		 	var calcul = widthMenu + position.right;

   		 	if(calcul > widthDocument)
   		 	{
   		 		var diff = calcul-widthDocument;
   		 		var leftPosition = leftPosition-diff+10;

   		 	}

   		 	$( this ).children( "div" ).css("right", rightPosition);
	  	}
	  	else
	  	{
   		 	var position = $( this ).offset();
   		 	$( this ).children( "div" ).css("padding-right", position.right);
	     	$( this ).children( "a:first-child" ).toggleClass();		
	  	}

   		 $( this ).children( "div" ).show();
   		 $( this ).children("a:first-child").addClass('activeMenuSubMenu');

  	  }, function() 
  	  {
  	  	var idSubMenu = this.id;
  	  	var classNextElement = $(':hover').last().attr('class');
  
  	  
  	  		var element = this;
  	  		if(idSubMenu == "subMenuProfil")
  	  		{
  	  			$( element ).children( "div" ).hide();  	  	
			   	$( element ).children("a:first-child").removeClass('activeMenuSubMenu'); 	
  	  		else
  	  		{
	  	  		$( this ).children( "div" ).hide();
		   		$( this ).children("a:first-child").removeClass('activeMenuSubMenu'); 
  	  		}
  		
  	  	
  	  	
	  		
  	  
  	  });


		$(".searchInputHeader .gd-search").click(function() 
	  	{
    		$('.borderEffect').focus();
	  	});

		$(".gd-slider-arrow-bottom").click(function() 
	  	{
  			$('html,body').animate({ scrollTop: $(".underSlideHomePage").offset().top-78}, 'slow');
	  	});



		$(".linkFooter").click(function() 
	  	{
	  		var link = this;

		  	if($(link).next('.subMenuFooter').css('display') == 'none' )
		  	{
				  $(link).next('.subMenuFooter').slideDown();
		  	}
		  	else
		  	{
				  $(link).next('.subMenuFooter').slideUp();
		  	}

	  	});



		$(".logoMenu").click(function() 
	  	{
		  	if($(".menuLeftMobile").css('display') == 'none' )
		  	{
		   			$(".menuLeftMobile").show({
			             duration: 400
			        });	
		  	}
		  	else
		  	{
				   $(".menuLeftMobile").hide({
			             duration: 400
			        });	  		
		  	}


	  	});


	</script>