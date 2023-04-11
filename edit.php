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


            while($user_data = mysqli_fetch_assoc($result)){

            
            $nome = $user_data['nome'];
            $senha = $user_data['senha'];
            $telefone = $user_data['fone'];
            $email = $user_data['email'];
            $sexo = $user_data['sexo'];
            $data_nasc =$user_data['data_nasc'];
            $cidade = $user_data['cidade'];
            $estado  = $user_data['estado'];
            $endereco =$user_data['endereco'];
           
            }
        


        }else
        {

            header('Location:sistema.php');
        }

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
           
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg,rgb(17, 0, 255),rgb(0, 162, 255));

        }

        .box{
            margin: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(3, 3, 41, 0.79);
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            padding: 10px;
            border-radius: 15px;
            width: 30%;
            margin-bottom: 30px;
        
           

           
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
        #update{
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

        a{
            color: white;
            text-decoration: none;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }


    </style>
</head>
<body>
<a href="sistema.php"><img src="arrow-right-square-fill.svg" alt=""><strong>   back </strong></a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><strong>Formulario de Clientes</strong></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="inome" class="inpuuser" value="<?php echo $nome ?>"required>
                    <label class="labelinput" for="">Nome Completo</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="email" id="imail" class="inpuuser" value="<?php echo $email ?>"required>
                    <label class="labelinput" for="">E-mail</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="senha" id="isenha" class="inpuuser" value="<?php echo $senha ?>"required>
                    <label class="labelinput" for="">Password</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="telefone" id="itelefone" class="inpuuser" value="<?php echo $telefone ?>"required>
                    <label class="labelinput"for="">Celular</label>
                </div>
                <p>Sexo:</p>
                <div class="sexo">
                    <input type="radio" name="genero" id="feminino" value="feminino"<?php echo $sexo =="feminino" ? 'checked':''?> required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="genero" id="masculino" value="masculino"<?php echo $sexo == "masculino" ?'checked':''?>>
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="outro" value="outro"<?php echo $sexo == "outro"?'checked':''?>>
                    <label for="outro">Outro</label>
                </div>
                <br><br>
                <div class="nas">
                    <strong><label for="outro">Data de Nascimento :</label></strong>
                    <input type="date" name="data_nascimento" id="data_nasc" class="in_nasc" value="<?php echo $data_nasc ?>">
                    
                </div>
                <br><br>
                <div class="inputbox">
                   
                    <input type="text" name="cidade" id="cidade" class="inpuuser"value="<?php echo $cidade ?>" required>
                  <label class="labelinput"for="cidade">Cidade:</label>
                    
                    
                </div>
                <br>
                <div class="inputbox">
                    
                    <input type="text" name="estado" id="estado" class="inpuuser" value="<?php echo $estado ?>"required>
                   <label class="labelinput"for="estado">Estado:</label>
                    
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="end" id="endereco" class="inpuuser"value="<?php echo $endereco ?>" required>
                   <label class="labelinput"for="end">Endereco:</label>
                </div >
                <br>
                <input type="hidden" name="id" value="<?php echo "$id"?>">
                
                <input id="update" type="submit" name="update" value="Salva" >
                <br>
                
            </fieldset>
        </form>
    </div>
</body>
</html>