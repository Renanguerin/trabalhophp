<?php
  require_once 'conexao.php'; 
  $con = open_conexao(); 
  selectDb();   
  $rs = mysql_query("select pedidos.id, pedidos.cliente, clientes.nome,
                     pedidos.data from pedidos INNER JOIN clientes
                     on pedidos.cliente = clientes.id;"); 
  close_conexao($con); 
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <title>Lista de Pedidos</title>
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
<div class="container">

    <h1>Consultar Pedidos da Loja</h1>
    <br/>
    <button type="button" class="btn btn-primary btn-sm"
     onclick="javascript:location.href='frmInsPedido.php'">Novo</button>
     <br>
    <br/>
    <div class="row col-md-6">
    <table  class="table table-striped">
        <tr>
           <th widht="80" align="center">ID do Pedido</th> 
           <th widht="150" align="right">ID do Cliente</th>
           <th widht="80" align="right">Nome</th>
           <th widht="80" align="right">Data</th>
           <th></th>
           <th></th>
        </tr>
        <?php while ($row = mysql_fetch_array($rs)) { ?> 
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['cliente'] ?></td>
                <td><?php echo $row['nome']?></td>
                <td><?php echo (new DateTime($row['data']))->format("d-m-Y");?></td>
              </tr>
        <?php } ?>
    </table>
    </div>
</div>
            <div class="footer">
        Desenvolvido por Renan Guerin
    </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery/jquery.js"></script>    

    </body>
</html>