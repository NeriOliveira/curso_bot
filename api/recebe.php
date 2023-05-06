<?php
require_once('../conn.php');

##################################################################
############### VARIAVEIS NECESSARIAS
$numero_get = $_GET['telefone'];
$usuario_get = $_GET['usuario'];
$msg_usuario = $_GET['msg'];
##################################################################
############## FUNÇÕES

#### DATA E HORA

date_default_timezone_set('America/Sao_Paulo');
$now = time();

$data_hora = date('Y-m-d H:i:s', $now);

#### FUNÇÃO PARA IDENTIFICAR NUMEROS
function ehNumero($texto){
    return is_numeric($texto);
}

#### FUNÇÃO LETRA MAIUSCULA
function primeiraLetraMaiuscula($texto){
    $primeiraLetra = mb_strtoupper(mb_substr($texto, 0, 1));
    $restante = mb_strtolower(mb_substr($texto, 1));
    return $primeiraLetra . $restante;
}




?>