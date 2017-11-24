<?php
    require_once 'conexao.php'; 
    $con = open_conexao(); 
    selectDb(); 
    //recuperar valor passado por get
    $id = trim($_REQUEST['ID']); 
    //buscar no banco de dados
    $rs = mysql_query("SELECT * FROM produto where ID=". $id);
    close_conexao($con);

     $row = mysql_fetch_array($rs); 
     $desc = $row['Descricao']; 
     $qtd = $row['Quantidade'];  
     $val = $row['Valor'];
?>
<html>
     <head>
        <meta charset="UTF-8">
        <title>Editar Produtos</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
       <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
      <div class="container">
        <div class="navbar-header"><a class="navbar-brand" >CAP PEÇAS</a>
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
        <div class="row col-md-6">
        <h1>Alteração de dados de Produto</h1>
            <br/><br/>
        <form id="frmEdPro" name="frmEdPro" method="post" action="edtPro.php">
           <div class="form-group">
              <label for="lblIdt" class="textoBold">ID: <?php echo $id?> </label>
              <input type="hidden" name="ID" value="<?php echo $id?>"/>
           </div>
           <div class="form-group">
              <label for="lblDesc" class="textoBold">Descrição:</label>
              <input type="text" class="form-control" id="txtDesc"
               name="txtDesc" value="<?php echo $desc?>" placeholder="Nome do produto...">
           </div>
           <div class="form-group">
              <label for="lblQtd" class="textoBold">Quantidade:</label>
              <input type="text" class="form-control" name="txtQtd" 
              id="txtQtd" value="<?php echo $qtd?>" placeholder="informe a quantidade...">
           </div>
           <div class="form-group">
              <label for="lblVal" class="textoBold">Valor:</label>
              <input type="text" class="form-control" name="txtVal" 
              id="txtVal" value="<?php echo $val?>" placeholder="informe o preço...">
           </div>         
           <input name="bt_cad" id="bt_cad" class="btn btn-primary btn-sm" type="submit" value="Gravar"> 
           <input name="bt_voltar" id="bt_voltar" class="btn btn-primary btn-sm" type="button" value="Voltar"
                 onclick="javascript:location.href='listarProd.php'"> 

        </form>
        </div>
        </div>
                <div class="footer">
        Desenvolvido por Renan Guerin
    </div>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jquery/jquery.js"></script>    
    </body>   
</html>


