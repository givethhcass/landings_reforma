<?php 
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
include_once 'functions.php';
$randomString = functions::generateRandomString();
$referenceCode = date("YmdHis").$randomString;
$hash = "LzMHJvcc2Zi2V5XO62EPulyzPR"."~"."576116"."~".$referenceCode."~"."459"."~"."MXN";
$signature = md5($hash);
$hash2 = "LzMHJvcc2Zi2V5XO62EPulyzPR"."~"."576116"."~".$referenceCode."~"."1399"."~"."MXN";
$signature2 = md5($hash2);
?>
<!DOCTYPE html>
<!--
    Name: Skylith - Viral & Creative Multipurpose HTML Template
    Version: 1.0.3
    Author: nK, unvab
    Website: https://nkdev.info/, http://unvab.com/
    Purchase: https://themeforest.net/item/skylith-viral-creative-multipurpose-html-template/21214857?ref=_nK
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2018.
-->
    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sergio Aguayo - Polimatía</title>

    <meta name="description" content="Polimatía y Reforma">
    <meta name="keywords" content="Polimatía y Reforma">
    <meta name="author" content="Polimatía">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700%7cPT+Serif:400i,500i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- Stroke 7 -->
    <link rel="stylesheet" href="assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- JustifiedGallery -->
    <link rel="stylesheet" href="assets/vendor/justifiedGallery/dist/css/justifiedGallery.min.css">

    <!-- Skylith -->
    <link rel="stylesheet" href="assets/css/skylith-yellow.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/custom-dark-creative-agency.css">
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120715407-16"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120715407-16');
</script>

<style>
 /*
        Desktop first
        */
        
        /* Extra Small Devices, Phones */ 
    @media only screen and (max-width : 768px) {
        
body > header > nav > div > div{
text-align: center;
}

body > div.nk-main.nk-main-dark > div.nk-header-title.nk-header-title-lg.nk-header-title-parallax-content.nk-header-content-center-left > div.nk-header-content > div > div > div > div.col-lg-8.col-md-8{
text-align: center;
}
body > div.nk-main.nk-main-dark > div.nk-header-title.nk-header-title-lg.nk-header-title-parallax-content.nk-header-content-center-left > div.nk-header-content > div > div > div > div.col-lg-8.col-md-8 > div.para > h1{
font-size: 3rem;
}

.para{
width: 100%;
}

.pricing {
left: 0;
}

.person {
    max-width: 90%;
    position: absolute;
    bottom: 0;
    right: -15%;
    z-index: -1;
    top: 0;
    left: auto;
}
    }

  </style>

    
</head>







<!--
    Additional Classes:
        .nk-bg-gradient
-->
<body>
    



<!--
    START: Nav Header

    Additional Classes:
        .nk-header-left
        .nk-header-opaque
-->
<header class="nk-header">

    
       
        <nav class="nk-navbar nk-navbar-top nk-navbar-items-collapsed nk-navbar-transparent nk-navbar-white-text-on-top nk-navbar-dark">
            <div class="container">
                



 <!---->
                     <div class="row vertical-gap">
            <div class="col-lg-6 col-md-6">
                 <img src="assets/images/polimatia_logo.png" alt="" width="200" class="nk-nav-logo-img-light">


            </div>

             <div class="col-lg-6 col-md-6 text-lg-right">
                <img src="assets/images/reforma_logo.png" alt="" width="200" class="nk-nav-logo-img-light">


            </div>

        


        <!---->
                    
                   <!--  <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo.svg" alt="" width="" class="nk-nav-logo-img-dark">
                        <img src="assets/images/polimatia_logo.png" alt="" width="200" class="nk-nav-logo-img-light">
                         <img src="assets/images/reforma_logo.png" alt="" width="200" class="nk-nav-logo-img-light">
                    </a> -->
                    
                    

  
                    
                  
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->
    

</header>
<!-- END: Nav Header -->

    
    
    

    

    <!--
        START: Main Content

        Additional Classes:
            .nk-main-dark
    -->
    <div class="nk-main nk-main-dark">
        
<!-- START: Header Title -->
<!--
    Additional Classes:
        .nk-header-title-sm
        .nk-header-title-md
        .nk-header-title-lg
        .nk-header-title-xl
        .nk-header-title-full
        .nk-header-title-parallax
        .nk-header-title-parallax-content
        .nk-header-content-center-center
        .nk-header-content-center-left
        .nk-header-content-center-right
        .nk-header-content-top-center
        .nk-header-content-top-left
        .nk-header-content-top-right
        .nk-header-content-bottom-center
        .nk-header-content-bottom-left
        .nk-header-content-bottom-right
-->
<div class="nk-header-title nk-header-title-lg nk-header-title-parallax-content nk-header-content-center-left">
    
    <div class="bg-image bg-image-parallax">    
        <img src="assets/images/back_lm.png" alt="" class="jarallax-img">
         
    </div>
    
    
    <div class="nk-header-content">
        <div class="nk-header-content-inner">
            <div class="container">

                 <div class="row vertical-gap">
            <div class="col-lg-8 col-md-8">



                  
                   <div class="para">

                      <h1 class="nk-title display-1 text-white text-center"><span class="text-main">Las amenazas a la seguridad en México</span>
                       


                          <p class="pcoverboldx text-center"> <br>-Curso en línea-</p>
                    
                     <!-- <div class="pricing"> <span class="price">$499<sup style="top: -1.5em;font-size: 20px;" >MXN</sup><br><span class="online"> EN LÍNEA</span></span></div> -->

                </h1>

                     <p class="pcoverlast text-lg-right">Sergio Aguayo</p>
                   

                   <p class="pcoverbold">Conoce las causas de la situación actual de inseguridad, violencia y crimen organizado que enfrenta México. Descubre los factores que permitieron el surgimiento de los principales cárteles y sus líderes.</p>

                   <p class="pcoverslim">Impartido por uno de los mas importantes especialistas en seguridad pública, prevención del delito, derechos humanos y participación ciudadana.</p>

                   <p class="pcoverlast">Duración: 7 capítulos / 11 horas.</p>

               </div>

               <!-- <div class="pricing"> <img alt="$499 mxn en línea" src="./assets/images/4992.svg"> </div> -->
                
                
                    <div class="nk-gap"></div>
                    <div class="nk-header-text text-white text-center">
                        

<a href="javascript: submitform('LM')" class="nk-btn">Comprar Curso</a>


<div class="nk-gap-3"></div>

</div>

</div>


<div class="col-lg-4 col-md-4">

<div class="pricing"> <img alt="$499 mxn en línea" src="./assets/images/459.svg"> </div>

<div class=""><img class="person" alt="Lorenzo Meyer" src="./assets/images/sergio_aguayo.png"></div>




    </div>



               
              </div>
                
                
            </div>
        </div>
    </div>
    
    

</div>
<!-- END: Header Title -->



        

   <?php

include 'cardsbodysusc.php';

?>

<!--START: Footer-->
<?php

include 'footer.php';

?>



<!-- END: Footer -->    

    

    

    

    
<!-- START: Scripts -->

<!--Single Course Form -->
<form method="post" action="https://gateway.payulatam.com/ppp-web-gateway" style="display:none;" name="LM-form">
    <input type="image" border="0" alt="" src="http://www.payulatam.com/img-secure-2015/boton_pagar_pequeno.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
    <input name="merchantId" type="hidden" value="576116"/>
  <input name="referenceCode" type="hidden" value="<?php echo $referenceCode; ?>"/>
    <input name="accountId" type="hidden" value="578924"/>
    <input name="description" type="hidden" value="Curso Sergio Aguayo Landing Susc Reforma"/>
    <input name="amount" type="hidden" value="459"/>
    <input name="tax" type="hidden" value=""/>
    <input name="taxReturnBase" type="hidden" value="0"/>
    <input name="shipmentValue" value="" type="hidden"/>
    <input name="currency" type="hidden" value="MXN"/>
    <input name="lng" type="hidden" value="es"/>
    <input name="approvedResponseUrl" type="hidden" value="https://l.polimatia.com/success/"/>
    <input name="declinedResponseUrl" type="hidden" value="https://l.polimatia.com/error/"/>
  <input name="confirmationUrl" type="hidden" value="https://polimatia.com/Resultado_proceso.php" />
      <input name="extra1" type="hidden" value="107">
     <input name="extra2" type="hidden" value="1">
    <input name="displayShippingInformation" type="hidden" value="NO"/>
    <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
  <input name="buttonId" type="hidden" value="xIHGKwS/tq42vB9m9CEpLVuyvWepAf1xYQ+4DRM7mrahIiFuj+efkw=="/>
  <input name="signature" value="<?php echo $signature; ?>" type="hidden"/>      
</form>

<!-- Promotion form -->
<form method="post" action="https://gateway.payulatam.com/ppp-web-gateway" style="display:none;" class="hide" name="Paq">
    <input type="image" border="0" alt="" src="http://www.payulatam.com/img-secure-2015/boton_pagar_pequeno.png" onClick="this.form.urlOrigen.value = window.location.href;"/>
    <input name="buttonId" type="hidden" value="RGzr8+rqu2ftBcwJ8OJH98DjYHMg+5X1Q6OlQemAdJT0lZlJlS+ffg=="/>
    <input name="merchantId" type="hidden" value="576116"/>
    <input name="accountId" type="hidden" value="578924"/>
    <input name="description" type="hidden" value="Paquete de cursos Landing Reforma"/>
    <input name="referenceCode" type="hidden" value="<?php echo $referenceCode; ?>"/>
    <input name="amount" type="hidden" value="1399"/>
    <input name="tax" type="hidden" value=""/>
    <input name="taxReturnBase" type="hidden" value="0"/>
    <input name="shipmentValue" value="" type="hidden"/>
    <input name="currency" type="hidden" value="MXN"/>
    <input name="lng" type="hidden" value="es"/>
    <input name="approvedResponseUrl" type="hidden" value="http://l.polimatia.com/success/"/>
    <input name="declinedResponseUrl" type="hidden" value="http://l.polimatia.com/error/"/>
     <input name="confirmationUrl" type="hidden" value="https://polimatia.com/Resultado_proceso.php" />
     <input name="extra1" type="hidden" value="108">
     <input name="extra2" type="hidden" value="1">
    <input name="displayShippingInformation" type="hidden" value="NO"/>
    <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
    <input name="buttonType" value="SIMPLE" type="hidden"/>
    <input name="signature" value="<?php echo $signature2; ?>" type="hidden"/> >      
</form>
    
<!-- START: Scripts -->

<script>
  function submitform(data)
  {
    switch(data) {
      case "LM":
      document.forms['LM-form'].submit();
      break;
      case "Paq":
      document.forms['Paq'].submit();
      break;
      default:
    }
  }
</script>














<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- ImagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Isotope -->
<script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- JustifiedGallery -->
<script src="assets/vendor/justifiedGallery/dist/js/jquery.justifiedGallery.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- Keymaster -->
<script src="assets/vendor/keymaster/keymaster.js"></script>


<!-- Skylith -->
<script src="assets/js/skylith.min.js"></script>
<script src="assets/js/skylith-init.js"></script>
<!-- END: Scripts -->

    
</body>
</html>
