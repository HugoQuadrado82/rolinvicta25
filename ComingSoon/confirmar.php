<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configuração da base de dados
$host = "HOST";
$dbname = "DATABASE";
$username = "USER";
$password = "PASSWORD";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['email']) && isset($_GET['token'])) {
        $email = filter_var($_GET['email'], FILTER_SANITIZE_EMAIL);
        $token = $_GET['token'];

        // Verificar se o email e token existem na base de dados
        $stmt = $pdo->prepare("SELECT * FROM newsletter WHERE email = :email AND token = :token AND confirmado = 0");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":token", $token);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Atualizar o registo para confirmado
            $stmt = $pdo->prepare("UPDATE newsletter SET confirmado = 1 WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            // Enviar email de agradecimento
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host       = 'wp8.webserver.pt';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'noresp@rolinvicta.pt';
                $mail->Password   = '5XkaUxj8WZs5GSk';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
                
                $mail->CharSet = 'UTF-8'; // Define a codificação correta

                $mail->setFrom('noresp@rolinvicta.pt', 'Rolinvicta');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Obrigado por confirmar o seu email!';
                $mail->Body = "
                    <div style='font-family: Arial, sans-serif; text-align: center; padding: 20px; background-color: #f4f4f4;'>
                        <img src='https://rolinvicta.pt/registo/images/RolinvictaBigLogoTransparent.png' alt='Rolinvicta' 
                             style='max-width: 400px; margin-bottom: 20px;'>
                        <h2 style='color: #333;'>Bem-vindo à Rolinvicta!</h2>
                        <p style='color: #555;'>Obrigado por confirmar o seu email. Agora faz parte da nossa comunidade!</p>
                        <a href='https://rolinvicta.pt/' 
                           style='display: inline-block; padding: 10px 20px; font-size: 16px; color: white; background-color: #28A745; 
                                  text-decoration: none; border-radius: 5px; margin-top: 10px;'>
                           Visite-nos
                        </a>
                    </div>
                ";
                $mail->AltBody = "Obrigado por confirmar o seu email! Agora faz parte da nossa comunidade. Visite https://rolinvicta.pt/";

                $mail->send();
                // Se a confirmação foi bem-sucedida
                header('Location: index.php?confirmacao=sucesso'); // Redireciona para a página index.php com o parâmetro de confirmação
                exit();
            } catch (Exception $e) {
                echo "Erro ao enviar email de agradecimento: {$mail->ErrorInfo}";
            }
        } else {
            echo "Link inválido ou email já confirmado.";
        }
    } else {
        echo "Parâmetros inválidos.";
    }
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>
