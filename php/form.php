<?php
session_start();

$cotacao = isset($_POST["cotacao"]) ? true : false;

date_default_timezone_set("America/Sao_Paulo");
$data = date('d/m/Y');

// REGASTANDO VARIAVEIS
$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$mensagem = filter_input(INPUT_POST, "mensagem");

$dados = [
    "tipo" => "contato",
    "nome" => $nome,
    "email" => $email,
    "mensagem" => $mensagem
];

// VARIAVEIS DE COTACAO
if ($cotacao) {
    $dados["tipo"] = "cotacao";
    $dados["telefone"] = $telefone = filter_input(INPUT_POST, "telefone");
    $dados["empresa"] = $empresa = filter_input(INPUT_POST, "empresa");
    $dados["uf"] = $uf = filter_input(INPUT_POST, "uf");
    $dados["assunto"] = $assunto = filter_input(INPUT_POST, "assunto");

}

$dados["data"] = $data;
$_SESSION["dados"] = $dados;

header("location: email.php");