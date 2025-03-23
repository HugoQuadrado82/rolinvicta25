<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'DB.php';

// Executando uma consulta
$resultados = DB::query("SELECT Id, Nome FROM Utilizador WHERE Status = ?", ["ativo"]);

// Iterando sobre os resultados
foreach ($resultados as $usuario) {
    //echo $usuario->Id . "<br>"; // Exibe os ids dos usuários ativos
    //echo $usuario->Nome . "<br>"; // Exibe os nomes dos usuários ativos
    $html = <<<HTML

<p><b>$usuario->Id</b> : {$usuario->Nome}</p>

HTML;
    echo $html;

    
}
