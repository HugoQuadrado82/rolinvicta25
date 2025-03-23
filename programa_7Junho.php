<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: text/html; charset=UTF-8');

include 'config.php'; // Ou require 'config.php';

// Criar a conexão com o MySQL e configurar o charset UTF-8mb4
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8mb4");

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// SQL Query
$sql = "
    SELECT 
        at.Nome, 
        at.Titulo, 
        at.Descricao, 
        at.Data, 
        at.Duracao, 
        ta.Nome AS Tipo_Atividade, 
        sa.Nome AS Sala_Nome, 
        ma.Nome AS Mesa_Nome
    FROM Atividade at
    JOIN Tipos_Atividade ta ON ta.Id = at.Tipo_Atividade_Id
    JOIN Utilizador me ON me.Id = at.Mestre1
    JOIN Salas sa ON sa.Id = at.Sala_Id
    JOIN Mesa ma ON ma.Id = at.Mesa
    JOIN Evento_Atual ea ON ea.Evento = at.Evento_Id
    WHERE (at.Status='Aguardando' OR at.Status = 'Em progresso') 
    AND ta.Id = '3';
";

// Executar a query e verificar se houve erro
if ($result = $conn->query($sql)) {
    // Caso a query tenha retornado resultados
    if ($result->num_rows > 0) {
        $dados = [];
        // Iterar pelos resultados
        while ($row = $result->fetch_assoc()) {
            // Corrigir a codificação de cada campo para UTF-8
            foreach ($row as $key => $value) {
                $row[$key] = html_entity_decode($value, ENT_QUOTES, 'UTF-8');
            }
            // Adicionar os dados no array (opcional, dependendo do seu uso)
            $dados[] = $row;
        }
    }
} else {
    // Caso ocorra erro na query
    die("Erro na query: " . $conn->error);
}

// Fechar a conexão
$conn->close();
?>


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
    <link rel="shortcut icon" href="images/favicon.ico" title="Favicon"/>

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

.pricing-block-content {
    padding-left: 10px;
    padding-top: 0px;
    border: 2px solid #1b66a5; /* Cor azul personalizada */
    border-radius: 5px; /* Opcional: cantos arredondados */
    padding: 10px; /* Espaço interno */
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
                   <h1 class="data-do-evento">Sábado 7 Junho!</h1>
                    <h1 class="tipo-de-evento">10H-13H</h1>
                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-block-content">
                        <h3>Sessões</h3>
                       <!-- <p class="pricing-sub">10h-13h</p> -->
                        <ul>
                            <li>MESA 1 | D&D</li>
                            <li>MESA 2 | D&D Crianças</li>
                            <li>MESA 3 | Mais D&D</li>
                            <li>MESA 4 | Ainda mais D&D</li>
                            <li>MESA 5 | Mais do mesmo D&D</li>
                            <li>MESA 6 | Novidade! D&D</li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-block featured col-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-block-content">
                        <h3>Palestras</h3> <!-- Palavra "Palestras" dentro de pricing-block-content -->
                        <ul>
                            <?php foreach ($dados as $row): ?>
                                <li>
                                    <span class="hora"><?= date('H:i', strtotime($row['Data'])) ?> - <?= date('H:i', strtotime('+1 hour', strtotime($row['Data']))) ?></span><br>
                                    <?= htmlspecialchars($row['Titulo']) ?><br>
                                    <?= htmlspecialchars($row['Nome']) ?><br>
                                    <p class="pricing-sub"><?= htmlspecialchars($row['Sala_Nome']) ?> - <?= htmlspecialchars($row['Mesa_Nome']) ?></p>
                                    <p><?= htmlspecialchars($row['Descricao']) ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>






                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="pricing-block-content">
                        <h3>Workshop</h3>
                        <ul>
                            <li><span class="hora">11H-13H</span><br>Como ser um mestre a improvisar<br>Gilberto Felismino<p class="pricing-sub">Sala 6</p></li>
                        </ul>
                        <p>Gostarias de ser o melhor a improvisar momentos mirabilantes na tua aventura?</p>
                        <p>Participa neste workshop e aprende todas as técnicas e truques que um mestre de improvisação tem para te ensinar!</p>
                    </div>
                </div>

                <!--End Pricing Block-->

            </div>


<div class="row clearfix padding-top-10" style="padding-bottom: 0px;">
                    <h1 class="tipo-de-evento">14H-16H</h1>
                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-block-content">
                        <h3>Sessões</h3>
                       <!-- <p class="pricing-sub">10h-13h</p> -->
                        <ul>
                            <li>MESA 1 | D&D</li>
                            <li>MESA 2 | D&D Crianças</li>
                            <li>MESA 3 | Mais D&D</li>
                            <li>MESA 4 | Ainda mais D&D</li>
                            <li>MESA 5 | Mais do mesmo D&D</li>
                            <li>MESA 6 | Novidade! D&D</li>
                        </ul>
                    </div>
                </div>

                <div class="pricing-block featured col-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-block-content">
                        <h3>Palestras</h3>
                        <ul>
                            <li><span class="hora">11H-12H</span><br>Neurodivergência e jogos Narrativos<br>Sofia Vilhena<br><p class="pricing-sub">Sala 4</p></li>
                        </ul>
                        <p>Estudos mostram que os jogos narrativos têm benefícios para as crianças neurodivergentes.</p>
                        <p>Sofia Vilhena é formada em Educação Especial e vem partilhar as aprendizagens que traz das suas sessões de D&D com crianças autistas.</p>
                    </div>
                </div>


                <div class="pricing-block col-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="pricing-block-content">
                        <h3>Workshop</h3>
                        <ul>
                            <li><span class="hora">11H-13H</span><br>Como ser um mestre a improvisar<br>Gilberto Felismino<p class="pricing-sub">Sala 6</p></li>
                        </ul>
                        <p>Gostarias de ser o melhor a improvisar momentos mirabilantes na tua aventura?</p>
                        <p>Participa neste workshop e aprende todas as técnicas e truques que um mestre de improvisação tem para te ensinar!</p>
                    </div>
                </div>

                <!--End Pricing Block-->

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
</html>