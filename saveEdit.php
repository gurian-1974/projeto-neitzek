<?php

include_once('config.php');

if(isset($_POST['update'])){
    print_r($_POST['id']);
    print('<br>');
    print_r($_POST['nome']);
   print('<br>');
   print_r($_POST['senha']);
   print('<br>');
    print_r($_POST['email']);
     print('<br>');
    print_r($_POST['telefone']);
   print('<br>');
   print_r($_POST['genero']);
   print_r('<br>');
    print_r($_POST["data_nascimento"]);
    print_r('<br>');
    print_r($_POST['cidade']);
    print('<br>');
    print_r($_POST['estado']);
    print_r('<br>');
    print_r($_POST['end']);


        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc =$_POST["data_nascimento"];
        $cidade = $_POST['cidade'];
        $estado  = $_POST['estado'];
        $endereco = $_POST['end'];


        $sqlUpdate ="UPDATE gustavo SET nome='$nome',senha='$senha',telefone='$telefone',email='$email',sexo='$sexo',data_nas='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco' 
       WHERE id_gu='$id'";
       
            
        $result = $conexao->query($sqlUpdate);

}
header('Location:sistema.php');


?>