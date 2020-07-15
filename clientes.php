<?php
    session_start();
    include('verifica_login.php');    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Clientes</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Loja de Armas</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php">Clientes</a>
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

    <div style="margin: 10vh auto; width: 75vw;">
        <form action="./controller.php" method="post">
            <div style="margin: 10px auto">
                Nome: <input type="text" name="nome" placeholder="Digite seu nome">
                E-mail: <input type="email" name="email" placeholder="Digite seu e-mail">
                Cidade: <input type="text" name="cidade" placeholder="Digite sua cidade">
                UF: <input type="text" name="estado" size="2" maxlength="2" placeholder="UF">
            </div>
            <div style="margin: 5vh auto">
                <button type="submit" name="cadastrar">Cadastrar</button>
                <button type="submit" name="atualizar">Atualizar</button>
                <button type="submit" name="excluir">Excluir</button>
            </div>
            <div style="margin: 10vh auto">
                <table border="1" style="width: 100%;" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>CIDADE</th>
                            <th>ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once ( __DIR__ . '/registros.php') ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>    
</body>
</html>




