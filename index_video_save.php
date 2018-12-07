<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  
<!-- Head -->
<head>
  <title>Accueil</title>     
  <?php require('global/template-components/head_general.php'); ?>
</head>
<!-- Head -->
  
<body id="home">
  
<!-- Header header.php / header_connected.php -->
<?php require('global/template-components/header_connected.php'); ?>
<!-- Header -->


<div id="firstStop"></div>

<!-- Contenu -->
<div class="orbit sliderAccueil"  id="featured1" role="region" data-auto-play="false" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="fixedButton">
      <a href="#"><button class="createProjectButton">Créer son projet </button></a>
    </div>
    <div class="orbit-controls">
      <button class="orbit-previous"><div class="gd-slider-arrow-left"></div><span class="show-for-sr">Previous Slide</span></button>
      <button class="orbit-next"><div class="gd-slider-arrow-right"></div><span class="show-for-sr">Next Slide</span></button>
    </div>

    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <div class="travelBy" style="display: none;">
          Projet porté par 
          <br>
          <img src="https://placehold.it/150x40/888?text=Slide-2" alt="Space" />          
          </div>
          <div class="videoPlayButton" style="display: none;">
            <div class="gd-video-play"></div>
          </div>
          <div class="videoSoundButton" >
            <div class="gd-video-sound-off"></div>
          </div>

         <video class="videoSliderAccueil" autoplay>
          <source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4">
         </video>
        <figcaption class="orbit-caption">C’est votre rêve ? Faites comme Laura et Raphaël, 
Réalisez le.</figcaption>         
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
      
          <img class="orbit-image" src="https://placehold.it/1920x700/888?text=Slide-2" alt="Space">
          <figcaption class="orbit-caption">Lets Rocket!</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1920x700/777?text=Slide-3" alt="Space">
          <figcaption class="orbit-caption">Encapsulating</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="https://placehold.it/1920x700/666&text=Slide-4" alt="Space">
          <figcaption class="orbit-caption">Outta This World</figcaption>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
    <div class="gd-slider-arrow-bottom"></div>
  </nav>
</div>

<div class="underSlideHomePage">


  <div class="containerUnderHomePageMobile">
  <h1>Comment ça marche ? </h1>
    <div id="carousel" class="owl-carousel carouselMobileCCM">
      <div class="item blockUnderHomePage">
        <a href="#" class="hoverSplashHomePage"><div class="gd-homepage-1"><div class="gd-circle-orange-splash">1</div></div></a>
        <p>Présentez votre projet impactant</p>
      </div>
    <div class="item blockUnderHomePage">
        <a href="#" class="hoverSplashHomePage"><div class="gd-homepage-2"><div class="gd-circle-orange-splash">2</div></div></a>
        <p>Démarrez le crowdfunding</p>
      </div>
    <div class="item blockUnderHomePage">
        <a href="#" class="hoverSplashHomePage"><div class="gd-homepage-3"><div class="gd-circle-orange-splash">3</div></div></a>
        <p>Attirez des sponsors</p>
      </div>
    <div class="item blockUnderHomePage">
        <a href="#" class="hoverSplashHomePage"><div class="gd-homepage-4"><div class="gd-circle-orange-splash">4</div></div></a>
        <p>Réalisez votre rêve</p>
      </div>
    </div>

  <p> <a class="createProjectMobile" href="#">Créer son projet</a></p>

  </div>

 

 


  
  <div class="underSlideHomePage">

    <div class="containerUnderHomePage" style="height: 750px;">
      <h2 style="margin-left:800px">Comment ça marche ? </h2>
      <div class="grid-x grid-margin-x align-center blockCCMPC">
        <div class="small-12 medium-12 large-auto cell blockUnderHomePage" style="
            width: 49%;
            margin-left: 900px;
            padding-bottom: 0px;
            margin-right: 0px;">
          <a href="#" class="hoverSplashHomePage">
            <div class="gd-circle-orange-fix">1</div>

            <div class="gd-homepage-1">
            </div>
          </a>
          <p style="
    width: 300px;">Présentez votre projet impactant</p>
        </div>
        <div class="small-12 medium-12 large-auto cell blockUnderHomePage" style="
            width: 49%;
            margin-left: 900px;
            padding-bottom: 0px;
            margin-right: 0px;">
          <a href="#" class="hoverSplashHomePage">
            <div class="gd-circle-orange-fix">2</div>

            <div class="gd-homepage-2">
            </div>
          </a>
          <p style="
    width: 300px;">Démarrez le crowdfunding</p>
        </div>
        <div class="small-12 medium-12 large-auto cell blockUnderHomePage" style="
            width: 49%;
            margin-left: 900px;
            padding-bottom: 0px;
            margin-right: 0px;">
          <a href="#" class="hoverSplashHomePage">
            <div class="gd-circle-orange-fix">3</div>

            <div class="gd-homepage-3">
            </div>
          </a>
          <p style="
    width: 300px;">Attirez des sponsors</p>
        </div>
        <div class="small-12 medium-12 large-auto cell blockUnderHomePage" style="
            width: 49%;
            margin-left: 900px;
            padding-bottom: 0px;
            margin-right: 0px;">
          <a href="#" class="hoverSplashHomePage">
            <div class="gd-circle-orange-fix">4</div>

            <div class="gd-homepage-4">
            </div>
          </a>
          <p style="
    width: 300px;">Réalisez votre rêve</p>
        </div>
      </div>
      <div class="cell pad_cell" style="width: 750px; margin-left: 15px; margin-top: -550px;">
        <div class="callout1">
          <div class="imgGrid" style="background-image: url('global/images/3.jpg');">
            <div class="gd-eco gd-icon"></div>
            <a href=""><img class="thumb_post" src="global/images/3.jpg" alt="image of a planet called Pegasi B"></a>
          </div>
          <p><a href="" class="lead">The Prologue Project</a></p>
          <a href="" class="author">Frédéric</a>
          <div class="progress" role="progressbar" tabindex="0" aria-valuenow="20" aria-valuemin="0" aria-valuetext="25 percent"
            aria-valuemax="100">
            <span class="progress-meter orange" style="width: 25%">
              <p class="progress-meter-text">25%</p>
            </span>
          </div>
          <div class="objectif" style="width: 280px; margin-left: 280px;">
            <div class="gd-tirelire"></div>
            <div class="textObjectif">5800 € collectés (objectif : 12860 €)</div>
          </div>
          <div class="more_details grid-container">
            <div class="grid-x align-justify">
              <div class="cell small-4 postGridIconsBottom">
                <div class="gd-days"></div>
                <div class="textIconsBottom">J-226</div>
              </div>
              <div class="cell small-4 postGridIconsBottom groupsIcon" style="width:100px">
                <div class="gd-group"></div>
                <div class="textIconsBottom">29</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<article class="grid-container full articleContainer">
  
  <?php require('global/template-components/post_grid.php'); ?>


</article>

  <?php require('global/template-components/partenaires.php'); ?>


<a href="#"  ><div class="goToTop" style="display:none;">
<div class="gd-arrow-top"></div>
</div></a>

<a href="#"><div class="needHelp">
<div class="gd-help"></div><div class="textNeedHelp">Besoin d'aide ? </div>
</div></a>

<!-- Contenu -->  

<!-- Footer -->
<div class="footerAbsolute">
    <?php require('global/template-components/footer.php'); ?>
  </div>
<!-- Footer -->

<!-- Scripts -->
    <?php require('global/template-components/scripts.php'); ?>
         <script type="text/javascript">
      
    $(window).focus(function() {

        let scroll = $(window).scrollTop();
        
    if(scroll < 85)
      {
            $('video')[0].play();
      }
    });

    $(window).blur(function() {


          $('video')[0].pause();
    });
    
    </script>

<!-- Scripts -->
</body>
</html>