<?php
    if(!empty($_GET['id'])){

    include_once('config.php');

    $id = $_GET['id'];
    echo $id;
   $sqlSelect = "SELECT * FROM contatos WHERE idcon=$id";
   $result = $conexao->query($sqlSelect);
   echo " porra";
   print_r($result);
  
        if($result->num_rows >0){

           $sqlDelete = "DELETE FROM contatos WHERE idcon=$id";
           $resutset = $conexao->query($sqlDelete);


        }

            header('Location:sistema.php');
            //echo"erro";

}

?>