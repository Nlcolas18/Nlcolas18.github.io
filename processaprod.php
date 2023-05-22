<?php
//Processo Banco de dados Produtos
include_once("conexaoprod.php");

$produto = $_POST['produto'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];

$sql = "insert into produtos (produto,tipo,valor) values ('$produto', '$tipo', '$valor')";
$salvar = mysqli_query($conexaoprod, $sql);

$linhas = mysqli_affected_rows($conexaoprod);


mysqli_close($conexaoprod);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de cadastro</title>
    <link rel="stylesheet" href="usuarios.css">
</head>
<body>
    <div class="container">
    <nav>
            <ul class="menu">
        <a href="cadastro.php"><li>Usuários</li></a>
        <a href="consultausu.php"><li>Consulta de Usuário</li></a>
        <a href="produtos.php"><li>Produtos</li></a>                
        <a href="consultaprod.php"><li>Consulta de Produtos</li></a>
        <a href="index.html"><li>Sair</li></a>
            </ul>
        </nav>
        <section>
            <h1>Confirmação de Cadastro</h1>
            <hr><br><br>

            <?php
            if($linhas == 1){
                print "Cadastro efetuado com sucesso!";
            }else{
                print "Cadastro NÃO efetuado. <br> Já existe um usuário com este e-mail!";
                
            }


            ?>
        </section>
    </div>
</body>
</html>