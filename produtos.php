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
    <title>Cadastrar Produtos</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="main.php">Loja de Armas</a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="produtos.php">Cadastrar Produtos</a>
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

    <div style="margin: 10vh auto; width: 75vw;">
        <h2><p>Cadastrar Produtos</p></h2>
        <form action="./controller_produtos.php" method="post">
            <div class="form-group">
                <label>Produto</label>
                <input type="text" name="nome_produto" class="form-control">
                <br>

                <label>Descrição</label>
                <input type="text" name="descricao" class="form-control">
                <br>

                <label>Valor</label>
                <input type="text" name="valor" class="form-control">
            </div><br>
            <div>
                <button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
                <button type="submit" class="btn btn-warning" name="atualizar">Atualizar</button>
                <button type="submit" class="btn btn-danger" name="excluir">Excluir</button>
            </div>
            
            <div style="margin: 10vh auto">
                <h2><p>Clientes Cadastrados</p></h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME PRODUTO</th>
                            <th scope="col">DESCRIÇÃO</th>
                            <th scope="col">VALOR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include_once ( __DIR__ . '/registro_produtos.php') ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    
    

</body>
</html>