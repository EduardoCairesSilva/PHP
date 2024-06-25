<?php

session_start();

require 'vendor/autoload.php';

use Yandu\SendEmail\PHPMailer;
use Yandu\SendEmail\Exception;
use Yandu\SendEmail\SMTP;

class Mensagem
{
    private $email_usuario;
    private $email_remetente;
    private $assunto;
    private $descricao;
    public $status = ['descricao_status' => null, 'mensagem' => null];

    public function __set($attr, $value)
    {
        return $this->$attr = $value;
    }

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function isValidMessage()
    {
        if (empty($this->email_usuario) || empty($this->email_remetente) || empty($this->assunto) || empty($this->descricao)) {
            return false;
        }
        return true;
    }
}



$message = new Mensagem();
$message->email_usuario = $_POST['email_usuario'];
$message->email_remetente = $_POST['email_remetente'];
$message->assunto = $_POST['assunto'];
$message->descricao = $_POST['descricao'];

if (!$message->isValidMessage()) {
    echo "Deu errado enviar o email!";
}

$mail = new Yandu\SendEmail\PHPMailer();
$mail->IsSMTP();

$mail->SMTPDebug = false;
$mail->Host = "localhost";
// $mail->SMTPAuth   = true;
// $mail->SMTPSecure = 'ssl';
$mail->Port = 1025;
$mail->IsHTML(true);
$mail->Username = "yandudu743@gmail.com";
$mail->Password = "kGcJjPfGyKXNqv4zvpH6";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SetFrom($message->email_usuario);
$mail->AddAddress($message->email_remetente);
$mail->Subject = $message->assunto;
$mail->Body = $message->descricao;

$message->status['descricao_status'] = 1;
$message->status['mensagem'] = "Email enviado com sucesso!";

if (!$mail->Send()) {
    $message->status['descricao_status'] = 2;
    $message->status['mensagem'] = "Não foi possivel enviar este e-mail! Tente novamente mais tarde." . $mail->ErrorInfo;
    // header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Envio de email</title>
</head>

<body>

    <div class="container">
        <div class="py-3 text-center">
            <img src="imagens/logo.png" alt="" class="d-block mx-auto mb-2" src="logo.png" alt="" width="74" height="74">
            <h2>Send mail</h2>
            <p class="lead">Seu app de envio de e-mail particular!</p>
        </div>

        <div class="row">
            <div class="col-md-12">
                <? if ($message->status['descricao_status'] == 1) { ?>

                    <div class="container d-grid gap-2 col-3 mx-auto">
                        <h1 class="text-success d-flex justify-content-center">Sucesso</h1>
                        <strong>
                            <p class="d-flex justify-content-center"><?= $message->status['mensagem'] ?></p>
                        </strong>
                        <a href="index.php" class="btn btn-success text-white d-block justify-content-center">Voltar</a>
                    </div>

                <? } ?>

                <? if ($message->status['descricao_status'] == 2) { ?>

                    <div class="container d-grid gap-2 col-3 mx-auto">
                        <h1 class="text-danger d-flex justify-content-center">Ops!</h1>
                        <strong>
                            <p class="d-flex justify-content-center"><?= $message->status['mensagem'] ?></p>
                        </strong>
                        <a href="index.php" class="btn btn-danger text-white d-block justify-content-center">Voltar</a>
                    </div>

                <? } ?>

            </div>
        </div>

    </div>

</body>

</html>