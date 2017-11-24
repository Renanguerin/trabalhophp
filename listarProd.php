<?php
require_once 'conexao.php';
$con = open_conexao();
selectDb();
$rs = mysql_query("SELECT * FROM produto;"); //rs=record set (conjunto de registros)
close_conexao($con);
?>
<html>
    <head>
        <title>Listar Produtos</title>
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
        <div class="container">

        <h1>Lista de Produtos</h1>
		<br/>
		<input id="bt_ins" class="btn btn-primary btn-sm" 
            	 type="button"  value="Cadastrar Novo"
                 onclick="javascript:location.href='inserir.html'">
		<br/> <br/>
            <div class="row col-md-8">
        <table class="table table-striped">
		 
            <tr>
                <th>ID</th>
                <th>Descricao</th>
                <th>Quantidade</th>
                <th>Valor R$</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            <?php while ($row = mysql_fetch_array($rs)) { ?>
                <tr>
                   <td><?php echo $row['ID'] ?></td>
                   <td><?php echo $row['Descricao'] ?></td>
                   <td><?php echo $row['Quantidade'] ?></td>
                   <td><?php echo $row['Valor'] ?></td>
                    <td> <a class='btn btn-outline-primary' onclick="javascript: location.href='frmEdtPro.php?ID=' +
                         <?php echo $row['ID'] ?>"> <i class='material-icons'>&#xE869;</i>  </a></td>
                    <td> <a class='btn btn-outline-danger' onclick="javascript: location.href='frmRemPro.php?ID=' +
                         <?php echo $row['ID'] ?>"> <i class='material-icons'>&#xE92B;</i> </a></td>
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
