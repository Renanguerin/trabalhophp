
<?php
session_start();
if (!isset($_SESSION['user'])) //AND (!isset($_SESSION[nome])) ) 
Header("Location: index.html");
?>

<html>
    <head>
        <title>Home</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
      <div class="container">
        <div class="navbar-header"><a class="navbar-brand" href="#">CAP PEÇAS</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="menu.php">Página Inicial</a>
                </li>
                <li><a href="listarProd.php">Produtos</a>
                </li>
                <li><a href="listarPedidos.php">Pedidos</a>
                </li>
                <li><a href="validacao.html">Validação</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
        
    <div class="container" align="center">

        <div class="tituloMenu" style="margin-top:5%">MENU DE OPÇÕES</div>
        <br/> <br/>
  <a href="listarProd.php" class="btn btn-primary btn-lg active" role="button" > Consultar Produtos</a>
  <br> <br>
  <a href="listarPedidos.php" class="btn btn-primary btn-lg active" role="button">Consultar Pedidos</a>
        <br> <br>
  <a href="validacao.html" class="btn btn-primary btn-lg active" role="button">Exemplo de Validação</a>
  <br> <br>
  <a href="logout.php" class="btn btn-danger btn-lg active" role="button">Sair do Programa</a>
        </div>
        <div class="footer">Desenvolvido por Renan Guerin</div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery/jquery.js"></script>    
    </body>
</html>
