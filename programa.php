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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon" />

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
            font-weight: 700;
            color: #111;
        }


        .tipo-de-evento {
            font-family: 'Open Sans', sans-serif, Arial, Helvetica;
            font-size: 20px;
            font-weight: 700;
            color: #111;
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

        .pricing-block-content {
            padding-left: 10px;
            padding-top: 0px;
            border: 2px solid #1b66a5;
            /* Cor azul personalizada */
            border-radius: 5px;
            /* Opcional: cantos arredondados */
            padding: 10px;
            /* Espaço interno */
        }

        .pricing-block {
            padding-top: 0px;
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
        <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
        </div>
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
                            <img src="images/logo.png" id="banner-logo" alt="Landing Page" />
                            <!--End of Banner Logo-->

                            <!--The Logo that is shown on the sticky Navigation Bar-->
                            <img src="images/logo.png" id="navigation-logo" alt="Landing Page" />
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
            <div id="banner-content" class="row clearfix" style="padding-bottom: 0px;">
                <div class="row clearfix padding-top-10" style="padding-bottom: 0px;">
                    <?php
                    $title = $_GET["title"];
                    $html = <<<HTML

<h1 class="data-do-evento">$title!</h1>

HTML;
                    echo $html;
                    ?>

                    <?php
                    $resultados = DB::query("
SELECT at.*, CONCAT('€ ', FORMAT(at.Valor, 2)) Valor_Formatado,
ta.Nome Tipo_Atividade_Nome, tm.Nome Tipo_Mestre_Nome,
me.Nome Mestre_Nome, sa.Nome Sala_Nome, ma.Nome Mesa_Nome,
(
SELECT (at.Num_Max_Inscritos - COUNT(i.Id)) FROM Inscricao i WHERE
	i.Atividade_Id = at.Id
 AND (i.`Status`='Reservado' OR i.`Status`='Confirmado')
)
Vagas
FROM Atividade at
LEFT JOIN Tipos_Atividade ta ON ta.Id = at.Tipo_Atividade_Id
LEFT JOIN Tipos_Mestres tm ON tm.Id = at.Tipo_Mestre
LEFT JOIN Utilizador me ON me.Id = at.Mestre1
LEFT JOIN Salas sa ON sa.Id = at.Sala_Id
LEFT JOIN Mesa ma ON ma.Id = at.Mesa
JOIN Evento_Atual ea ON ea.Evento = at.Evento_Id
WHERE (at.`Status`='Aguardando' OR at.`Status` = 'Em progresso')
AND Date(at.`Data`) = Date(?)", [$_GET["link"]]);

                    $horas = array_column($resultados, 'Hora');
                    $horas = array_column($resultados, 'Hora');
$horas = array_map(function($hora) {
    return substr($hora, 0, 2);
}, $horas);

$horasUnicas = array_unique($horas);
sort($horasUnicas);

                    foreach ($horasUnicas as $hora) {
                        $horaTin = substr($hora, 0, 2) . "H";
                        $html = <<<HTML

<div class="row clearfix padding-top-10" style="padding-bottom: 0px;">
<h1 class="tipo-de-evento">$horaTin</h1>
HTML;
                        echo $html;
                        ?>
                        <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="pricing-block-content">
                                <h3>Sessões</h3>
                                <!-- <p class="pricing-sub">10h-13h</p> -->
                                <ul>
                                    <?php
                                    foreach ($resultados as $row) {
                                        $rhora = substr($row->Hora, 0, 2);
                                        if ($rhora == $hora && $row->Tipo_Atividade_Id == 1) {
                                            $html = <<<HTML

<li><h4>$row->Nome<h4>$row->Mesa_Nome  | $row->Tipo_Mestre_Nome: $row->Mestre_Nome | <b>$row->Vagas</b> Vagas</li>

HTML;
                                            echo $html;
                                        }

                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="pricing-block featured col-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="pricing-block-content">
                                <h3>Palestras</h3>
                                <?php
                                foreach ($resultados as $row) {
                                    $rhora = substr($row->Hora, 0, 2);
                                    if ($rhora == $hora && $row->Tipo_Atividade_Id == 3) {
                                        $html = <<<HTML

                        <ul>
                        <li><span class="hora">$row->Hora</span><br>$row->Nome<br>$row->Tipo_Mestre_Nome: $row->Mestre_Nome<br><p class="pricing-sub">Sala 4</p></li>
                        </ul>
                        <h3>$row->Titulo</h3>
                        <p>$row->SubTitulo</p>
                        <p>$row->Descricao</p>
                        <p>Investimento: <span class="price-value">$row->Valor_Formatado</span></p>

HTML;
                                        echo $html;
                                    }

                                }
                                ?>

                            </div>
                        </div>


                        <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="pricing-block-content">
                                <h3>Workshop</h3>
                                
                                <?php
                                foreach ($resultados as $row) {
                                    $rhora = substr($row->Hora, 0, 2);
                                    if ($rhora == $hora && $row->Tipo_Atividade_Id == 2) {
                                        $html = <<<HTML

                        <ul>
                        <li><span class="hora">$row->Hora</span><br>$row->Nome<br>$row->Tipo_Mestre_Nome: $row->Mestre_Nome<br><p class="pricing-sub">Sala 4</p></li>
                        </ul>
                        
                        <h3>$row->Titulo</h3>
                        <p>$row->SubTitulo</p>
                        <p>$row->Descricao</p>
                        <p>Investimento: <span class="price-value">$row->Valor_Formatado</span></p>

HTML;
                                        echo $html;
                                    }

                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <!--End Pricing Block-->
                <?php } ?>

            </div>
        </header>


    </div>

    <!-- Include JavaScript resources -->
    <?php include 'include_javascript.php'; ?>


</body>

</html>