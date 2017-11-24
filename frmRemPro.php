<?php

    require_once 'conexao.php';
    $con = open_conexao();
    selectDb();
    //recuperar valor passado por get
    $id = trim($_REQUEST['ID']);

     //buscar no banco de dados
    $rs = mysql_query("SELECT * FROM produto WHERE ID=". $id);

    close_conexao($con);


    $row = mysql_fetch_array($rs);

    $desc = $row['Descricao'];
    $qtd = $row['Quantidade'];
    $val = $row['Valor'];
?>
<html>
    <head>
       <meta charset="UTF-8"> 
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
       <link rel="stylesheet" href="bootstrap/css/style.css">
       <title>Remoção de Produtos</title>
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
        <h1>Remover Produto</h1>
        <form id="frmRemPro" name="frmRemPro" method="post" action="remPro.php">
          <div class="form-group">
            <label for="lblIdt">
               <span class="textoBold">ID:</span>
               <span class="textoNormal"><?php echo $id?></span>
            </label>
            <input type="hidden" name="ID"  value="<?php echo $id?>">
          </div>
          <div class="form-group">
            <label for="lblDesc">
               <span class="textoBold">Descrição:</span>
               <span class="textoNormal"><?php echo $desc;?></span>
            </label>
          </div>
          <div class="form-group">
          </div>
          <div class="form-group">
            <label for="lblQtd">
               <span class="textoBold">Quantidade:</span>
               <span class="textoNormal"><?php echo $qtd;?></span>
            </label>
          </div>          

          <div class="form-group">
            <label for="lblVal">
               <span class="textoBold">Valor:</span>
               <span class="textoNormal"> R$ <?php echo $val;?></span>
            </label>
          </div>
        <input id="bt_Rem" type="submit" value="Remover" class="btn btn-primary btn-sm"/>
          <button id="bt_voltar" type="button" class="btn btn-primary btn-sm"
          onclick="javascript:location.href='listarProd.php'">Voltar</button>.
          </div>
                    <div class="footer">
        Desenvolvido por Renan Guerin
    </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery/jquery.js"></script>   

    </body>    
</html>