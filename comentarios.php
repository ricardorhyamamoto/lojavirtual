<?php
    session_start();
    include('verifica_login.php');
    include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Enviar Comentário</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="main.php">Loja de Armas</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Cadastrar Clientes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="comentarios.php">Enviar Comentário</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
            <h6>Olá, <br><?php echo $_SESSION['nome'];?></h6>
            <li class="nav-item">
                <a href="logout.php">Sair</a>
            </li>
        </nav>
    </header>

    <div id="comentario">
        <h2>Escreva um comentário</h2><br>
        <form action="insert_comentario.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="form-group">
                <label>Comentário</label>
                <textarea rows="6" class="form-control" name="comentario" placeholder="Digite seu comentário"></textarea>
            </div>
            <input type="submit" name="submit" value="Enviar Comentário">
        </form>
    </div>
    
</body>
</html>