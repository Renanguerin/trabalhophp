<!-- insPedido.php -->
<?php
   require_once 'conexao.php'; 
   $cliente = trim($_POST['idCliente']); 
   $data = trim($_POST['data']); 
   
   if (!empty($cliente) && !empty($data)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "INSERT INTO pedidos (cliente, data) 
              VALUES ('$cliente', '$data');";  
      $ins = mysql_query($sql); 
      if ($ins==FALSE)
        $msg= "Erro na insercao de Pedidos...<BR/>";
      else {
          $msg = "Foi inserido ". mysql_affected_rows() . " registro";
          unset($cliente, $data); 
      }
      close_conexao($con); 
      echo $msg;
   }
   header("location: listarPedidos.php");// no futuro chamar formulario de inserir itens pedidos 
?> 