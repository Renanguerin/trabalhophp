<?php//Inserir Pedidos?>
<html>
    <head>
      <meta charset="UTF-8"> 
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap/css/style.css">
      <title>Cadastrar Pedido</title>
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
        <h1>Novo Pedido</h1>
        <form id="frmCadPed" action="insPedido.php" method="post" role="form">
            <div class="form-group">
                <label for="lblCliente">Cliente: </label>
                <!-- recuperar dados de cliente -->
                <?php
                require_once 'conexao.php';
                $con = open_conexao();
                selectDb();
                $rsCli = mysql_query("select * from clientes;"); //rs=record set (conjunto de registros)
                close_conexao($con);
                ?>
                <!-- Construir select option  -->
                <select name="idCliente" class="form-control">
                    <?php $linha = mysql_fetch_array($rsCli) ?>
                    <option value="<?php echo $linha['id']; ?>" selected>
                       <?php echo $linha['nome']; ?>
                    </option>
                    <?php 
                    while ($linha = mysql_fetch_array($rsCli)) {
                        ?>
                    <option value="<?php echo $linha['id']; ?>">
                        <?php echo $linha['nome']; ?>
                    </option>
                    <?php
                }
                ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="lblData">Data: </label>
                <input type="date" name="data" id="data" class="form-control"
                       value="<?php  (new DateTime())->format('Y-m-d'); ?>">
            </div>
            <br>

            <input id="bt_cad" type="submit" value="Cadastrar" class="btn btn-primary btn-sm"/>
            <input  id="bt_limpar" type="reset" value="Limpar" class="btn btn-primary btn-sm"/>
            <button id="bt_voltar" type="button" class="btn btn-primary btn-sm"
             onclick="javascript:location.href='listarPedidos.php'">Voltar</button>
        </form>
        </div>          <div class="footer">
        Desenvolvido por Renan Guerin
    </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery/jquery.js"></script>   
    </body>
</html>
