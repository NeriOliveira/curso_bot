<?php

$adm = 0;

?>

<style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      
      form {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        margin: 0 auto;
      }
      
      table {
        width: 100%;
      }
      
      th,
      td {
        padding: 10px;
        text-align: left;
      }
      
      th {
        background-color: #eee;
      }
      
      input[type="text"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
        margin-top: 5px;
      }
      
      input[type="submit"] {
        padding: 10px;
        background-color: #4CAF50;
        border: none;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
      }
      
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>DELIVERY</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="js/responsive-nav.js"></script>
  </head>
  <body>

    <header>
      <a href="index.php" class="logo" data-scroll>DELIVERY</a>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item "><a href="index.php" data-scroll>VENDAS</a></li>
          <li class="menu-item active"><a href="produtos.php" data-scroll>PRODUTOS</a></li>
          <li class="menu-item"><a href="pedidos.php" data-scroll>PEDIDOS</a></li>
          <li class="menu-item"><a href="config.php" data-scroll>CONFIGURAÇÕES</a></li>      
          <li class="menu-item"><a href="admin.php" data-scroll>ADMIN</a></li>      
          <li class="menu-item"><a href="sair.php" data-scroll>SAIR</a></li>
    
        </ul>
      </nav>
    </header>

    <section id="home">
    <body>
        <div align='center'>
    <form id="form1" name="form1" method="post" action="">
      <table>
        <tr>
          <th>Produtos</th>
          <th>Valores</th>
        </tr>
        <tr>
          <td>Botijão Gás</td>
          <td><br>
          <input type="number" name="gas" id="gas" step="0.01" min="0.00" max="9999.99" lang="pt-BR" style="text-align: right; direction: rtl;" />

          </td>
        </tr>
        <tr>
          <td>Galão de Água</td>
          <td><br>
          <input type="number" name="agua" id="agua" step="0.01" min="0.00" max="9999.99" lang="pt-BR" style="text-align: right; direction: rtl;" />

          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="button" id="button" value="Salvar" />
          </td>
        </tr>
      </table>
    </form>
  </body>
    </div>
    </section>

  

    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
  </body>
</html>
