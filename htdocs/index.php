<?php

require 'config.php';

include 'src/Ramais.php';
$ramal = new Ramais($mysql);
$ramal = $ramal->verificar_status();

?>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/monitoramento.css">
  <title>Monitoramento de Ramais</title>

</head>

<body>
  <div class="container">
    <div class="row">
      <h1>Painel de monitoramento de ramal</h1>
    </div>
    <div class="row">
      <div id="cartoes">
      </div>
    </div>
  </div>

  <div class="container">
    <p>
      
    </p>
  </div>

  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/monitoramento.js"></script>

</body>

</html>