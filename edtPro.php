<?php
    require_once 'conexao.php'; 
     //recupera valores passados pelo método post
    $id = trim($_POST['ID']); 
    $desc  = trim($_POST['txtDesc']); 
    $qtd = trim($_POST['txtQtd']);
    $val = trim($_POST['txtVal']);
    if(!empty($desc) && !empty($qtd) && !empty($val)){
        $con = open_conexao(); 
        selectDb();
        
      $sql = "UPDATE produto set descricao='$desc',
              quantidade='$qtd', valor='$val' 
              where ID='$id';";
      $ins = mysql_query($sql); 
         close_conexao($con); 
      
        if ($ins==FALSE)
         $msg = "Atualização de produtos deu erro..."; 
      else {
         $msg = "Foi alterado" . mysql_affected_rows() . " registros <br/>";
         unset($id, $desc, $qtd, $val); 
      }
      echo $msg; 
    }
    header("location: listarProd.php")
?>