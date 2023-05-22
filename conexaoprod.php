<?php
/*Conexão Banco de Dados Produtos*/
$hostname = "localhost";
$user = "root";
$password = "";
$database = "produtos";
$conexaoprod = mysqli_connect($hostname, $user, $password, $database);

if(!$conexaoprod){
    print "Falha na conexâo com o Banco de Dados";
}

?>