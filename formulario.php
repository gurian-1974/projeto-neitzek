<?php
include_once('config.php');

if(isset($_POST['submit'])){

    //print_r($_POST['nome']);
   // print('<br>');
    //print_r($_POST['email']);
     //print('<br>');
    //print_r($_POST['telefone']);
   // print('<br>');
   // print_r($_POST['genero']);
   // print('<br>');
    //print_r($_POST["data_nascimento"]);
    //('<br>');
    //print_r($_POST['cidade']);
    //print('<br>');
    //print_r($_POST['estado']);
    //print('<br>');
    //print_r($_POST['end']);
   
   

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nasc =$_POST["data_nascimento"];
$cidade = $_POST['cidade'];
$estado  = $_POST['estado'];
$endereco = $_POST['end'];



$result = mysqli_query($conexao,"INSERT INTO contatos(nome,fone,email,sexo,data_nasc,cidade,estado,endereco)
VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
print_r("Dados inserido");

}else{
    print_r("erro");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="arrow-right-square-fill.svg" type="image/x-icon">
    <title>Formulario | LG</title>
    <style>
        body{
            margin: 20px;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(17, 0, 255),rgb(0, 162, 255));

        }

        .box{
            margin: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(3, 3, 41, 0.79);
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            padding: 15px;
            padding-bottom: 20px;
            border-radius: 15px;
            width: 30%;
        
           

           
        }
        form {

            padding: 10px;
        }

        fieldset{
            border-radius: 10px;
           padding: 20px;
           
        }

        legend{
            border: 2px solid white;
            border-radius: 5px;
            text-align: center;
            padding: 10px;
        }
        .inputbox{
            position: relative;
            padding: 5px;
        }
        .inpuuser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width:100%;
            letter-spacing: 2px;

        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;

        }
        .inpuuser:focus~.labelinput,.inpuuser:valid~.labelinput{
            top:-20px;
            color: rgb(0, 136, 255);
            font-size: 12px;
        }
        #data_nascimento{
            border: none;
            border-radius: 10px;
            padding: 8px;
        }
        #sub{
            background-image: linear-gradient(45deg,rgb(17, 0, 255),rgb(0, 162, 255));
            border: none;
            width: 100%;
            height: 25px;
            color: white;
            border-radius: 10px;
           padding: auto;
            
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bolder;
        }

    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><strong>Formulario de Clientes</strong></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="inome" class="inpuuser" required>
                    <label class="labelinput" for="">Nome Completo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="email" id="imail" class="inpuuser" required>
                    <label class="labelinput" for="">E-mail</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="itelefone" class="inpuuser" required>
                    <label class="labelinput"for="">Celular</label>
                </div>
                <p>Sexo:</p>
                <div class="sexo">
                    <input type="radio" name="genero" id="feminino" value="feminino" checked>
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="genero" id="masculino" value="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="outro" value="outro">
                    <label for="outro">Outros</label>
                </div>
                <br><br>
                <div class="nas">
                    <strong><label for="outro">Data de Nascimento :</label></strong>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="in_nasc">
                    
                </div>
                <br><br>
                <div class="inputbox">
                   
                    <input type="text" name="cidade" id="cidade" class="inpuuser" required>
                  <label class="labelinput"for="cidade">Cidade:</label>
                    
                    
                </div>
                <br>
                <div class="inputbox">
                    
                    <input type="text" name="estado" id="estado" class="inpuuser" required>
                   <label class="labelinput"for="estado">Estado:</label>
                    
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="end" id="end" class="inpuuser" required>
                   <label class="labelinput"for="outro">Endereco:</label>
                </div>
                <br>
                <input id="sub" type="submit" name="submit" value="Enviar">
                <br>
                
            </fieldset>
        </form>
    </div>
</body>
</html>