
<?php
//conexão Banco de Dados Usuarios
$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexaousu = mysqli_connect($hostname, $user, $password, $database);

if(!$conexaousu){
    print "Falha na conexâo com o Banco de Dados";
}

?>



