<?php
    session_start();
    include_once('config.php');


    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true)and(!isset($_SESSION['senha'])==true)){

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
       header('Location:login.html');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM contatos ORDER BY idcon DESC";

    $result = $conexao->query($sql);

    //print_r($result);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="arrow-right-square-fill.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>SISTEMA | LG</title>
    <style>

body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(17, 0, 255),rgb(0, 162, 255));


        }
        .navbar-expand-lg {
            background-color: blue;

        }

        .table{

            color:white;
            background: rgba(0,0,0,0.5);
            border-radius: 12px 12px 0 0;



        }

        h1{
           
margin-left: 20px;
color:white;
padding: 10px;

        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-md">
    <a class="navbar-brand" href="#">SISTEMA | LG</a>
  </div>
  <div class="d-flex">
  <a href="./sair.php" class="btn btn-danger me-5">SAIR</a>
  </div>
</nav>
        <br>



    <h1>Relatorio de Clientes</h1>

    <div class="m-5">
        <table class="table">
          <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Senha</th>
          <th scope="col">Fone</th>
          <th scope="col">Email</th>
          <th scope="col">Sexo</th>
          <th scope="col">Nascimento</th>
          <th scope="col">Cidade</th>
          <th scope="col">Estado</th>
          <th scope="col">Endereco</th>
          <th scope="col">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
    
</th>

</tr>
          </thead>
          <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
               echo "<td>".$user_data['idcon']."</td>";
               echo "<td>".$user_data['nome']."</td>";
               echo "<td>".$user_data['senha']."</td>";
               echo "<td>".$user_data['fone']."</td>";
               echo "<td>".$user_data['email']."</td>";
               echo "<td>".$user_data['sexo']."</td>";
               echo "<td>".$user_data['data_nasc']."</td>";
               echo "<td>".$user_data['cidade']."</td>";
               echo "<td>".$user_data['estado']."</td>";
               echo "<td>".$user_data['endereco']."</td>";
               echo "<td>
               <a class='btn btn-5m btn-primary' href='edit.php?id=$user_data[idcon]'>
               <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
               <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
               <path fill-rule='evenodd'd='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
             </svg>
             </a>
             </td>"
               
               
               
               ;
            }
        ?>
          </tbody>
        </table>
    </div>
</body>
</html>

