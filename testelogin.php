<?php
session_start();
//print_r($_REQUEST);
if(isset($_POST["submit"])){
    include_once("./config.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r($email);
    //print_r("<br>");
    //print_r($senha);

    $sql = "SELECT * FROM contatos WHERE email = '$email' and senha='$senha'";
   

    $result = $conexao->query($sql);
   // print_r($_REQUEST);
    //print_r($result);

    if(mysqli_num_rows($result)<1){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
       header('Location:login.html');

    }else{

        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
        header('Location:sistema.php');
    }


}else{
    header('Location:login.html');
}


?>