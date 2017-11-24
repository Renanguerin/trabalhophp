<?php
   require_once 'conexao.php'; 
   $desc = trim($_POST['txtDesc']); ; 
   $qtd = trim($_POST['txtQtd']); 
   $val = trim($_POST['txtVal']); 
 
   if (!empty($desc) && !empty($qtd) && !empty($val)){
      $con = open_conexao(); 
      selectDb(); 
      $sql = "INSERT INTO produto 
               (descricao, quantidade, valor)
        VALUES ('$desc', '$qtd', '$val');";  
      $ins = mysql_query($sql); 
      if ($ins==FALSE)
        $msg= "Erro na insercao de Produtos...<BR/>";
      else {
          $msg = "Foi inserido ". mysql_affected_rows() . " registro";
          unset($desc, $uni, $qtd, $val); 
      }
      close_conexao($con); 
      echo $msg;
   }
   header("location: listarProd.php"); 
?> 