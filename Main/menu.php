            <nav id="nav-main">
                <ul>
                    <li>
                        <a href="https://rolinvicta.pt/site/index.html"><span>HOME</span></a>
                    </li>
                    <li class="has-submenu">
                        <a href="programa.html" class="toggle-submenu">Programa</a>
                        <ul class="submenu">
<?php
$result = DB::query("SELECT DISTINCT 
    CONCAT(
        UPPER(LEFT(DATE_FORMAT(Data, '%W'), 1)), 
        LOWER(SUBSTRING(DATE_FORMAT(Data, '%W'), 2)), ' ',
        DAY(Data), ' ',
        UPPER(LEFT(DATE_FORMAT(Data, '%M'), 1)), 
        LOWER(SUBSTRING(DATE_FORMAT(Data, '%M'), 2))
    ) AS DataFormatada,
    DATE(Data) AS Link
FROM Atividade WHERE Atividade.`Status` = 'Em progresso' || Atividade.`Status` = 'Aguardando'");

foreach ($result as $row) {
    $html = <<<HTML

<li><a target="_self" href="programa.php?link=$row->Link&title=$row->DataFormatada">$row->DataFormatada</a></li>

HTML;
echo $html;
}    

                            ?>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#Sessões" class="toggle-submenu">Sessões</a>
                        <ul class="submenu">
                            <li><a href="https://rolinvicta.pt/site/sessoes-dia1.html">Sessões Dia 1</a></li>
                            <li><a href="https://rolinvicta.pt/site/sessoes-dia2.html">Sessões Dia 2</a></li>
                            <li><a href="https://rolinvicta.pt/site/sessoes-dia3.html">Sessões Dia 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#Palestras">Palestras</a></li>
                    <li class="has-submenu">
                        <a href="#Workshops" class="toggle-submenu">Workshops</a>
                        <ul class="submenu">
                            <li><a href="https://rolinvicta.pt/site/workshops-dia1.html">Workshops Dia 1</a></li>
                            <li><a href="https://rolinvicta.pt/site/workshops-dia2.html">Workshops Dia 2</a></li>
                            <li><a href="https://rolinvicta.pt/site/workshops-dia3.html">Workshops Dia 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#ComoChegar">Como chegar</a></li>
                    <li><a href="#Galeria">Galeria</a></li>
                    <li><a href="#Contactos">Contactos</a></li>
                </ul>
            </nav>
