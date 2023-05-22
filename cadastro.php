<?php
//Tela de cadastro de usuarios
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
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
            <h1>Cadastro de Usuários</h1>
            <hr>
            <br>

            <form method="post" action="processausu.php">
                <input type="submit" class="btn salvar" value="Salvar">
                <input type="reset" class="btn limpar" value="Limpar">
                <br><br>

                Nome de Usuário: <br>
                <input type="text" name="nome" class="campo" placeholder="Nome de usuário" required autofocus><br>
                Email: <br>
                <input type="email" name="email" class="campo" placeholder="nome@provedor" required><br>
                Profissão: <br>
                <input type="text" name="profissao" class="campo" placeholder="Profissão" required>
 
            </form>
        </section>        
    </div>
</body>
</html>