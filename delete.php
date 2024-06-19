<?php
    if(!empty($_GET['id'])){

    include_once('config.php');

    $id = $_GET['id'];
    echo $id;
    echo 'teste';
   $sqlSelect = "SELECT * FROM gustavo WHERE id_gu=$id";
   $result = $conexao->query($sqlSelect);
   echo " deletado";
   print_r($result);
  
        if($result->num_rows >0){

           $sqlDelete = "DELETE FROM gustavo WHERE id_gu=$id";
           $resutset = $conexao->query($sqlDelete);


        }

            header('Location:sistema.php');
            //echo"erro";

}

?>