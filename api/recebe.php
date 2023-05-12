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
#### BUSCA CLIENTE
$busca_cliente = "SELECT * FROM cliente WHERE telefone = '$numero_get' AND email_painel = '$usuario_get'";
$cliente = mysqli_query($conn, $busca_cliente);
$total_cliente = mysqli_num_rows($cliente);

while ($dados_cliente = mysqli_fetch_array($cliente)){
    $id_cliente = $dados_cliente['id'];
    $telefone_cliente = $dados_cliente['telefone'];
    $nome_cliente = $dados_cliente['nome'];
    $endereco_cliente = $dados_cliente['endereco'];
    $email_painel_cliente = $dados_cliente['email_painel'];
    $situacao_cliente = $dados_cliente['situacao'];
}

#################################################################
#### BUSCA LOGIN

$busca_painel = "SELECT * FROM login WHERE email = '$usuario_get'";
$usuario_painel = mysqli_query($conn, $busca_painel);

while ($dados_painel = mysqli_fetch_array($usuario_painel)){
    $email_painel = $dados_painel['email'];
    $senha_painel = $dados_painel['senha'];
    $nome_painel = $dados_painel['nome'];
    $dinheiro_painel = $dados_painel['dinheiro'];
    $pix_painel = $dados_painel['pix'];
    $cartao_painel = $dados_painel['cartao'];
    $cardeneta_painel = $dados_painel['cardeneta'];
    $status_painel = $dados_painel['status'];
    $prod_gas = $dados_painel['prod_gas'];
    $prod_agua = $dados_painel['prod_agua'];  
}

#################################################################

if($total_cliente == 0){

    $sql = "INSERT INTO cliente (telefone, email_painel ) VALUES ('$numero_get', '$usuario_get')";
    $query = mysqli_query($conn, $sql);
    if ($query){

        $msg = 'Para começar, me diga seu nome. 😊';

        $sql = "INSERT INTO envios (telefone, msg, status, usuario) VALUES ('$numero_get', '$msg', '1', '$usuario_get')";
        $query = mysqli_query($conn, $sql);

    }
}


### PREENCHENDO O NOME DO CLIENTE
if($total_cliente == 1 && $nome_cliente == NULL){

$msg_usuario = primeiraLetraMaiuscula($msg_usuario);

$sql = "UPDATE cliente SET nome = '$msg_usuario' WHERE email_painel = '$usuario_get' AND telefone = '$numero_get'";
$query = mysqli_query($conn, $sql);

$msg = "Bem-vindo *$msg_usuario* ao nosso delivery de água e gás! 🤩
Escolha um número abaixo para informar a opção desejada.
*(1)* Galão de água 💧 *R$ $prod_agua* 💧
*(2)* Botijão de gás 🔥 *R$ $prod_gas* 🔥

*Digite apenas o número, por favor! 👍*";

$sql = "INSERT INTO envios (telefone, msg, status, usuario) VALUES ('$numero_get', '$msg', '1', '$usuario_get')";
$query = mysqli_query($conn, $sql);
        
}


?>