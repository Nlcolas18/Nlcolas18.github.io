<?php
//Tela de cadastro de produtos
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
        <h1>Cadastro de Produtos</h1>
        <hr>
        <br>

        <form method="post" action="processaprod.php">
            <input type="submit" class="btn salvar" value="Salvar">
            <input type="reset" class="btn limpar" value="Limpar">
            <br><br>
            

            Nome do Produto: <br>
            <input type="text" name="produto" class="campo" placeholder="Nome do Produto" required autofocus><br>
            Tipo do Produto <br>
            <input type="text" name="tipo" class="campo" placeholder="Tipo do Produto" required><br>
            Valor do Produto <br>
            <input type="number" name="valor" class="campo" placeholder="Valor do Produto" required>

        </form>
    </section>
</div>    
</body>
</html>