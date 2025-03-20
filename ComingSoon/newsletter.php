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

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"])) {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Verificar se o email já existe e se está confirmado
            $stmt = $pdo->prepare("SELECT confirmado FROM newsletter WHERE email = :email");
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                if ($result['confirmado']) {
                    echo "Este email já foi confirmado.";
                } else {
                    echo "Este email já foi registado, mas ainda não foi confirmado. Verifique a sua caixa de entrada.";
                }
            } else {
                // Criar um token único
                $token = bin2hex(random_bytes(32));

                // Inserir na base de dados
                $stmt = $pdo->prepare("INSERT INTO newsletter (email, token, confirmado) VALUES (:email, :token, 0)");
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":token", $token);
                $stmt->execute();

                // Enviar email de confirmação
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
                
                    $linkConfirmacao = "https://rolinvicta.pt/confirmar.php?email=" . urlencode($email) . "&token=" . $token;
                
                    $mail->isHTML(true);
                    $mail->Subject = 'Confirme o seu email';
                    $mail->Body = "
                    <div style='font-family: Arial, sans-serif; text-align: center; padding: 20px; background-color: #f4f4f4;'>
                        <img src='https://rolinvicta.pt/images/RolinvictaBigLogoTransparent.png' alt='Rolinvicta' 
                             style='max-width: 400px; margin-bottom: 20px;'>
                        <h2 style='color: #333;'>Confirme o seu Email</h2>
                        <p style='color: #555;'>Clique no botão abaixo para confirmar o seu registo na nossa newsletter.</p>
                        <a href='$linkConfirmacao' 
                           style='display: inline-block; padding: 10px 20px; font-size: 16px; color: white; background-color: #007BFF; 
                                  text-decoration: none; border-radius: 5px; margin-top: 10px;'>
                           Confirmar Email
                        </a>
                        <p style='font-size: 12px; color: #777;'>Se o botão não funcionar, copie e cole o link abaixo no seu navegador:</p>
                        <p style='font-size: 12px; color: #777;'>$linkConfirmacao</p>
                    </div>
                    ";
                    $mail->AltBody = "Clique no seguinte link para confirmar o seu email: $linkConfirmacao";
                
                    $mail->send();
                    header('Location: index.php?registo=sucesso');
                    exit();
                } catch (Exception $e) {
                    echo "Erro ao enviar email: {$mail->ErrorInfo}";
                }

            }
        } else {
            echo "Email inválido.";
        }
    }
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>
