
<?php
//consultas produtos

include_once("conexaoprod.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from produtos where produto like '%$filtro%' order by produto ";
$consulta = mysqli_query($conexaoprod,$sql);
$registro = mysqli_num_rows($consulta);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta produto</title>
    <link rel="stylesheet" href="usuarios.css">
</head>
<body>
    <div class="container">
    <nav>
            <ul class="menu">
        <a href="cadastro.html"><li>Usuários</li></a>
        <a href="consultausu.php"><li>Consulta de Usuário</li></a>
        <a href="produtos.php"><li>Produtos</li></a>                
        <a href="consultaprod.php"><li>Consulta de Produtos</li></a>
        <a href="index.html"><li>Sair</li></a>
            </ul>
        </nav>
        <section>
            <h1>Consultas</h1>
            <hr><br><br>

            <form method="get" action="">
                Filtrar por Produto: <input type="text" name="filtro" class="campo" required autofocus>
                <input type="submit" value="Pesquisar" class="btn">
            </form>

            <?php

            print "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";
            print "$registro registros encontrados.";
            

            while($exibirRegistros = mysqli_fetch_array($consulta)){
                $codigo = $exibirRegistros[0];
                $produto = $exibirRegistros[1];
                $tipo = $exibirRegistros[2];
                $valor = $exibirRegistros[3];

                print "<article>";

                print"$codigo<br>";
                print"$produto<br>";
                print"$tipo<br>";
                print"$valor<br>";

                print "</article>";
            }
            mysqli_close($conexaoprod);

            ?>
           
        </section>
    </div>
</body>
</html>