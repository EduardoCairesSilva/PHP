<?php

require 'vendor/autoload.php';

use Yandu\AppSendMail\PHPMailer;
use Yandu\AppSendMail\Exception;

class Mensagem
{
    private $para = null;
    private $assunto = null;
    private $mensagem = null;

    public function __set($attr, $value)
    {
        return $this->$attr = $value;
    }

    public function __get($attr)
    {
        $this->$attr;
    }

    public function mensagemValida()
    {
        if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
            return false;
        }
        return true;
    }
}

$mensagem = new Mensagem();
$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);

if (!$mensagem->mensagemValida()) {
    echo "Mensagem não é válida";
};

$mail = new Yandu\AppSendMail\PHPMailer;
$mail->IsSMTP();

$mail->CharSet = "UTF-8";
$mail->Host = "localhost";
$mail->SMTPDebug = 1;
$mail->Port = 1025; //465 or 587

// $mail->SMTPSecure = 'ssl';
// $mail->SMTPAuth = true;
$mail->IsHTML(true);

//Authentication
$mail->Username = "yandudu743@gmail.com";
$mail->Password = "********";

//Set Params
$mail->SetFrom("joao@gmail.com");
$mail->AddAddress("yandudu743@gmail.com");
// $mail->Subject = "Test";
$mail->Body = "Disparando email do servidor apache para o servidor localhost dentro do docker.";


if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}
