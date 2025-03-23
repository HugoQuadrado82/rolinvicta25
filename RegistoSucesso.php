<<<<<<< HEAD:RegistoSucesso.php
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Rolinvicta'25</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


<style type="text/css">
    .data-do-evento {
        font-family: 'Open Sans', sans-serif, Arial, Helvetica;
        font-size: 24px; 
        font-weight:700;
        color:#111;
        }


    .tipo-de-evento {
        font-family: 'Open Sans', sans-serif, Arial, Helvetica;
        font-size: 20px; 
        font-weight:700;
        color:#111;
    }


    .padding-top-10 {
        padding-top: 10px;
    }

    /* Estilo para desktop */
    h3 {
        padding-top: 0;
    }

    /* Estilo para dispositivos móveis */
    @media (max-width: 768px) {
        h3 {
            padding-top: 30px;
        }
    }



.container {
    background-color: $white;
    border-radius: 5px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
            0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
  min-width:370px;
}



.left-container {
  flex:1;
  height:480px;
  background-color:$teal;
}
.right-container {
  display:flex;
  flex:1;
  height:460px;
  background-color: $white;
  justify-content:center;
  align-items:center;
}

.left-container {
  display:flex;
  flex:1;
  height:480px;
  justify-content:center;
  align-items:center;
    color:$white;
}

.left-container p {
  font-size:0.9rem;
}

.right-inner-container {
  width:70%;
  height:80%;
  text-align:center;
}

.left-inner-container {
  height:50%;
  width:80%;
  text-align:center;
  line-height:22px;
}

input, textarea {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
  font-size:0.8rem;
}

input:focus, textarea:focus{
  outline:1px solid $teal;
}

button {
    border-radius: 20px;
    border: 1px solid #00b4cf;
    background-color: #00b4cf;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
  cursor:pointer;
}

button:hover {
  opacity:0.7;
}
@media only screen and (max-width: 600px) {
  .left-container{
    display: none;
  }
  .lg-view {
    display:none;  
  }
}

@media only screen and (min-width: 600px) {
  .sm-view {
    display:none;  
  }
}

form p {
  text-align:left;
}

</style>
    

</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1" style="padding-left: 0px;">
                    <!--Logo-->
                    <div id="logo">

                        <!--Logo that is shown on the banner-->
                        <img src="images/logo.png" id="banner-logo" alt="Landing Page"/>
                        <!--End of Banner Logo-->

                        <!--The Logo that is shown on the sticky Navigation Bar-->
                        <img src="images/logo-2.png" id="navigation-logo" alt="Landing Page"/>
                        <!--End of Navigation Logo-->

                    </div>
                    <!--End of Logo-->

                    <aside>

                        <!--Social Icons in Header-->
                        <ul class="social-icons">
                            <li>
                                <a target="_blank" title="Facebook" href="https://www.facebook.com/rolinvicta">
                                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Twitter" href="https://x.com/rolinvicta">
                                    <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Instagram" href="http://www.instagram.com/rolinvicta">
                                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                </a>
                            </li>
                        </ul>
                        <!--End of Social Icons in Header-->

                    </aside>

                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            <li>
                                <a href="https://rolinvicta.pt/site/index.html"><span>HOME</span></a>
                            </li>

                            <li>
                                <a href="https://rolinvicta.pt/site/programa.html">Programa</a>
                            </li>
                            <li>
                                <a href="#Sessões">Sessões</a>
                            </li>
                            <li>
                                <a href="#Palestras">Palestras</a>
                            </li>
                            <li>
                                <a href="#Workshops">Workshops</a>
                            </li>
                            <li>
                                <a href="#ComoChegar">Como chegar</a>
                            </li>
                            <li>
                                <a href="#Galeria">Galeria</a>
                            </li>
                            <li>
                                <a href="#Contactos">Contactos</a>
                            </li>
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">

    <div class="row clearfix">

        <div class="col-1">
            <div class="section-heading">
                <h3>Rolinvicta'25!</h3>
                <h2 class="section-title">Obrigado pelo seu registo!</h2>
                <p class="section-subtitle">"The dice giveth and the dice taketh away.!</p>
            </div>
        </div>

    </div>

</div>

    </header>


</div>

<!-- Include JavaScript resources -->
<script src="js/jquery.1.8.3.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/featherlight.min.js"></script>
<script src="js/featherlight.gallery.min.js"></script>
<script src="js/jquery.enllax.min.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.stickyNavbar.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/images-loaded.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/site.js"></script>


</body>
=======
<?php require 'DB.php'; ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <!--Page Title-->
    <title>Rolinvicta'25</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="css/namari-color.css">

    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>


<style type="text/css">
    .data-do-evento {
        font-family: 'Open Sans', sans-serif, Arial, Helvetica;
        font-size: 24px; 
        font-weight:700;
        color:#111;
        }


    .tipo-de-evento {
        font-family: 'Open Sans', sans-serif, Arial, Helvetica;
        font-size: 20px; 
        font-weight:700;
        color:#111;
    }


    .padding-top-10 {
        padding-top: 10px;
    }

    /* Estilo para desktop */
    h3 {
        padding-top: 0;
    }

    /* Estilo para dispositivos móveis */
    @media (max-width: 768px) {
        h3 {
            padding-top: 30px;
        }
    }



.container {
    background-color: $white;
    border-radius: 5px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
            0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
  min-width:370px;
}



.left-container {
  flex:1;
  height:480px;
  background-color:$teal;
}
.right-container {
  display:flex;
  flex:1;
  height:460px;
  background-color: $white;
  justify-content:center;
  align-items:center;
}

.left-container {
  display:flex;
  flex:1;
  height:480px;
  justify-content:center;
  align-items:center;
    color:$white;
}

.left-container p {
  font-size:0.9rem;
}

.right-inner-container {
  width:70%;
  height:80%;
  text-align:center;
}

.left-inner-container {
  height:50%;
  width:80%;
  text-align:center;
  line-height:22px;
}

input, textarea {
    background-color: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
  font-size:0.8rem;
}

input:focus, textarea:focus{
  outline:1px solid $teal;
}

button {
    border-radius: 20px;
    border: 1px solid #00b4cf;
    background-color: #00b4cf;
    color: #FFFFFF;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
  cursor:pointer;
}

button:hover {
  opacity:0.7;
}
@media only screen and (max-width: 600px) {
  .left-container{
    display: none;
  }
  .lg-view {
    display:none;  
  }
}

@media only screen and (min-width: 600px) {
  .sm-view {
    display:none;  
  }
}

form p {
  text-align:left;
}

</style>
    

</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">

    <header id="" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1" style="padding-left: 0px;">
                    <!--Logo-->
                    <div id="logo">

                        <!--Logo that is shown on the banner-->
                        <img src="images/logo.png" id="banner-logo" alt="Landing Page"/>
                        <!--End of Banner Logo-->

                        <!--The Logo that is shown on the sticky Navigation Bar-->
                        <img src="images/logo.png" id="navigation-logo" alt="Landing Page"/>
                        <!--End of Navigation Logo-->

                    </div>
                    <!--End of Logo-->

                    <aside>

                        <!--Social Icons in Header-->
                        <ul class="social-icons">
                            <li>
                                <a target="_blank" title="Facebook" href="https://www.facebook.com/rolinvicta">
                                    <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Twitter" href="https://x.com/rolinvicta">
                                    <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" title="Instagram" href="http://www.instagram.com/rolinvicta">
                                    <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                                </a>
                            </li>
                        </ul>
                        <!--End of Social Icons in Header-->

                    </aside>

                    <!--Main Navigation-->
                    <nav id="nav-main">
                        <ul>
                            <li>
                                <a href="https://rolinvicta.pt/site/index.html"><span>HOME</span></a>
                            </li>

                            <li>
                                <a href="https://rolinvicta.pt/site/programa.html">Programa</a>
                            </li>
                            <li>
                                <a href="#Sessões">Sessões</a>
                            </li>
                            <li>
                                <a href="#Palestras">Palestras</a>
                            </li>
                            <li>
                                <a href="#Workshops">Workshops</a>
                            </li>
                            <li>
                                <a href="#ComoChegar">Como chegar</a>
                            </li>
                            <li>
                                <a href="#Galeria">Galeria</a>
                            </li>
                            <li>
                                <a href="#Contactos">Contactos</a>
                            </li>
                        </ul>
                    </nav>
                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">

    <div class="row clearfix">

        <div class="col-1">
            <div class="section-heading">
                <h3>Rolinvicta'25!</h3>
                <h2 class="section-title">Obrigado pelo seu registo!</h2>
                <p class="section-subtitle">"The dice giveth and the dice taketh away.!</p>
            </div>
        </div>

    </div>

</div>

    </header>


</div>

<!-- Include JavaScript resources -->
<?php include 'include_javascript.php'; ?>


</body>
>>>>>>> fc87ad8 (v2):Main/RegistoSucesso.php
</html>