<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'dbgustavo';

$conexao = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if($conexao->connect_error){
    echo 'erro na conexao';
}else{
    echo 'On-line';
}

?>