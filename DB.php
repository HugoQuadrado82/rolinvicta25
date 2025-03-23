<?php
DB::query("SET lc_time_names = 'pt_BR'");
class DB {
    private static $pdo;

    private static function connect() {
        if (!self::$pdo) {
            $host = 'rolinvicta.pt';
            $dbname = 'rolinvi1_elf';
            $user = 'rolinvi1_elf';
            $pass = 'Roll2025!';

            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            try {
                self::$pdo = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }
    }

    public static function query($sql, $params = []) {
        self::connect();
        $stmt = self::$pdo->prepare($sql);
        $stmt->execute($params);
        $result = $stmt->fetchAll();
        return array_map([self::class, 'mapToObject'], $result);
    }

    private static function mapToObject($row) {
        return new StdClassHelper($row);
    }
}

class StdClassHelper {
    public function __construct($data) {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }
}

// Exemplo de uso:
// require 'DB.php';
// $resultados = DB::query("SELECT id, nome FROM usuarios WHERE ativo = ?", [1]);
// foreach ($resultados as $usuario) {
//     echo $usuario->nome . "<br>"; // AutoComplete disponível
// }
