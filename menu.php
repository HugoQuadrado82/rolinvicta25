            <nav id="nav-main">
                <ul>
                    <li>
                        <a href="https://rolinvicta.pt/site/index.php"><span>HOME</span></a>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="toggle-submenu">Programa</a>
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
                            FROM Atividade , Evento_Atual
                            WHERE (Atividade.`Status` = 'Em progresso' || Atividade.`Status` = 'Aguardando')
                            AND (Atividade.Evento_Id = Evento_Atual.Evento)");

                            foreach ($result as $row) {
                                $html = <<<HTML

                            <li><a target="_self" href="programa.php?link=$row->Link&title=$row->DataFormatada">$row->DataFormatada</a></li>

                            HTML;
                            echo $html;
                            }    

                            ?>
                        </ul>
                    </li>
                    <li><a href="#Sessões">Sessões</a></li>
                    <li><a href="#Palestras">Palestras</a></li>
                    <li><a href="#Workshos">Workshos</a></li>
                    <li><a href="#ComoChegar">Como chegar</a></li>
                    <li><a href="https://rolinvicta.pt/site/galeria.php">Galeria</a></li>
                    <li><a href="#Contactos">Contactos</a></li>
                    <li><a href="https://rolinvicta.pt/elf/login.php">Login</a></li>
                </ul>
            </nav>
