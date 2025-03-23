<<<<<<< HEAD:index.php
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

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

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
                    <?php include 'menu.php'; ?>

                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                    <h1>Onde as histórias ganham vida!</h1>
                    <h2>A Rolinvicta é a maior convenção de jogos narrativos do Porto! Junta-te a nós para viver aventuras épicas e explorar mundos fantásticos. Aberto a todos, desde novatos a veteranos – a única regra é divertir-se!</h2>
                </div>

                <!--Call to Action-->
                <a href="https://rolinvicta.pt/elf/inscricao_utilizador_add.php" class="button">Inscrições</a>
                <!--End Call to Action-->

            </div>

        </div><!--End of Row-->
    </header>


</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".submenu").forEach(function (sub) {
        sub.classList.remove("open"); // Garante que começa fechado
    });

    document.querySelectorAll(".toggle-submenu").forEach(function (menu) {
        menu.addEventListener("click", function (event) {
            event.preventDefault();
            
            let submenu = this.nextElementSibling;
            let isOpen = submenu.classList.contains("open");

            document.querySelectorAll(".submenu").forEach(function (sub) {
                sub.classList.remove("open");
            });

            if (!isOpen) {
                submenu.classList.add("open");
            }
        });
    });
});



</script>



<!-- Include JavaScript resources -->
<?php include 'include_javascript.php'; ?>

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

    <header id="banner" class="scrollto clearfix" data-enllax-ratio=".5">
        <div id="header" class="nav-collapse">
            <div class="row clearfix">
                <div class="col-1">

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
                    <?php include 'menu.php'; ?>

                    <!--End of Main Navigation-->

                    <div id="nav-trigger"><span></span></div>
                    <nav id="nav-mobile"></nav>

                </div>
            </div>
        </div><!--End of Header-->

        <!--Banner Content-->
        <div id="banner-content" class="row clearfix">

            <div class="col-38">

                <div class="section-heading">
                    <h1>Onde as histórias ganham vida!</h1>
                    <h2>A Rolinvicta é a maior convenção de jogos narrativos do Porto! Junta-te a nós para viver aventuras épicas e explorar mundos fantásticos. Aberto a todos, desde novatos a veteranos – a única regra é divertir-se!</h2>
                </div>

                <!--Call to Action-->
                <a href="https://rolinvicta.pt/elf/inscricao_utilizador_add.php" class="button">Inscrições</a>
                <a href="https://rolinvicta.pt/elf/login.php">Fazer login</a>
                <!--End Call to Action-->

            </div>

        </div><!--End of Row-->
    </header>


</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".submenu").forEach(function (sub) {
        sub.classList.remove("open"); // Garante que começa fechado
    });

    document.querySelectorAll(".toggle-submenu").forEach(function (menu) {
        menu.addEventListener("click", function (event) {
            event.preventDefault();
            
            let submenu = this.nextElementSibling;
            let isOpen = submenu.classList.contains("open");

            document.querySelectorAll(".submenu").forEach(function (sub) {
                sub.classList.remove("open");
            });

            if (!isOpen) {
                submenu.classList.add("open");
            }
        });
    });
});



</script>



<!-- Include JavaScript resources -->
<?php include 'include_javascript.php'; ?>

</body>
>>>>>>> fc87ad8 (v2):Main/index.php
</html>