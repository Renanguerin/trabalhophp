<?php
    require_once('conexao.php');

    //recupera valores pelo método POST
    $id = trim($_POST['ID']);

    if(!empty($id)){
        $con = open_conexao(); 
        selectDb();
        $sql = "DELETE from produto where ID='$id';";
      $rem = mysql_query($sql); 
         close_conexao($con); 
      
        if ($rem==FALSE)
         $msg = "erro na remoção ..."; 
      else {
         $msg = "Foi removido" . mysql_affected_rows() . " registros <br/>";
         unset($id, $desc, $qtd, $val); 
      }
      echo $msg; 
    }
    header("location: listarProd.php")
?>