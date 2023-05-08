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
#################################################################

$busca_cliente = "SELECT * FROM cliente WHERE telefone = '$numero_get' AND email_painel = '$usuario_get'";
$cliente = mysqli_query($conn, $busca_cliente);
$total_cliente = mysqli_num_rows($cliente);

while ($dados_cliente = mysqli_fetch_array($cliente)){
    $id_cliente = $dados_cliente['id'];
    $telefone_cliente = $dados_cliente['telefone'];
    $nome_cliente = $dados_cliente['nome'];
    $enderec$vuo_cliente = $dados_cliente['endereco'];
    $email_painel_cliente = $dados_cliente['email_painel'];
    $situacao_cliente = $dados_cliente['situacao'];
}

if($total_cliente == 0){

    $sql = "INSERT INTO cliente (telefone, email_painel ) VALUES ('$numero_get', '$usuario_get')";
    $query = mysqli_query($conn, $sql);
}



?>