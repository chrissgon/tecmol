<?php
session_start();

$dados = $_SESSION["dados"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../vendor/autoload.php";
$mail = new PHPMailer();

try {
    // CONFIGURÇÕES
    $mail->IsSMTP();
    // $mail->SMTPDebug = 2;
    $mail->Host = "smtp.tecmol.com.br";
    $mail->SMTPAuth = true;
    $mail->Username = "contato@tecmol.com.br";
    $mail->Password = "7qPgRqeioK";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;
    $mail->CharSet = 'UTF-8';

    // REMENTENTE E DESTINATARIO
    $mail->setFrom($dados["email"], $dados["nome"]);
    $mail->AddAddress("comercial@tecmol.com.br");

    // MENSAGEM
    $mail->isHTML(true);
    $mail->Body = "
    <html>
    <head>
    <meta charset='UTF-8'>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600&display=swap');

    body{
        width: 100%;
    }

    html, body, header, article, h1, h3, p, span{
        font-family: 'Montserrat';
        font-weight: 400;
        font-size: 100%;
        box-sizing: border-box;
    }
    h1{
        font-size: 1.5rem;
        border-left: 5px solid #af2828;
        padding-left: 25px
    }
    header h3{
        font-size: .8rem;
    }
    .campo{
        width: 100%;
        margin-top: 25px;
    }
    .campo span{
        color: #af2828;
        font-weight: 500;
        padding-left: 5px;
    }
    .campo input, .campo textarea{
        width: 100%;
        max-width: 100%;
        min-width: 100%;
        font-family: 'Montserrat';
        font-size: 1rem;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, .2);
        outline: none;
        box-sizing: border-box;
        padding: 15px 15px;
    }
    .campo input:disabled, .campo textarea:disabled{
        background: #eee;
    }
    </style>
    </head>
    <body>";

    if ($dados["tipo"] == "cotacao") {
        $mail->Subject = "Cotação - Site";
        $mail->Body .= "<header>";
        $mail->Body .= "<h1>TecMol - Molas Indústriais</h1>";
        $mail->Body .= "<h3>Cotação realizado(a) por {$dados['nome']} no dia {$dados['data']}</h3>";
        $mail->Body .= "</header>";
        $mail->Body .= "<br><article>";
        $mail->Body .= "<h3>Detalhes sobre a cotação:</h3>";
        $mail->Body .= "<p class='campo'><span>Empresa</span><br><br><input disabled value='{$dados['empresa']}'></p>";
        $mail->Body .= "<p class='campo'><span>Assunto</span><br><br><input disabled value='{$dados['assunto']}'></p>";
        $mail->Body .= "<p class='campo'><span>Email</span><br><br><input disabled value='{$dados['email']}'></p>";
        $mail->Body .= "<p class='campo'><span>Telefone</span><br><br><input disabled value='{$dados['telefone']}'></p>";
        $mail->Body .= "<p class='campo'><span>UF</span><br><br><input disabled value='{$dados['uf']}'></p>";
        $mail->Body .= "<p class='campo'><span>Mensagem</span><br><br><textarea disabled>{$dados['mensagem']}</textarea></p>";
        $mail->Body .= "</article>";
    } else {
        $mail->Subject = "Contato - Site";
        $mail->Body .= "<header>";
        $mail->Body .= "<h1>TecMol - Molas Indústriais</h1>";
        $mail->Body .= "<h3>Contato realizado(a) por {$dados['nome']} no dia {$dados['data']}</h3>";
        $mail->Body .= "</header>";
        $mail->Body .= "<br><article>";
        $mail->Body .= "<h3>Detalhes sobre o contato:</h3>";
        $mail->Body .= "<p class='campo'><span>Mensagem</span><br><br><textarea disabled>{$dados['mensagem']}</textarea></p>";
        $mail->Body .= "</article>";
    }

    $mail->Body .= "</body></html>";

    if ($mail->Send()) {
        echo "Email enviado com sucesso";
        $_SESSION['msg'] = "Email enviado com sucesso";
    } else {
        echo $mail->ErrorInfo;
        $_SESSION['msg'] = "Erro ao enviar o email";
    }
    header("location: ../index.php");
} catch (Exception $e) {
    echo "Erro ao enviar o email({$mail->ErrorInfo})";
    $_SESSION['msg'] = "Erro ao enviar o email";
    header("location: ../index.php");
}
