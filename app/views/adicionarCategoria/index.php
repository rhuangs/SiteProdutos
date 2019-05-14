<html>

    <head>
        <link href="/public/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/public/css/meu-css.css" rel="stylesheet">
        <meta charset="UTF-8">
        <title>Adicionar Categoria</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/listaProdutos">Lista dos Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/app/views/adicionarProduto">Adicionar Produtos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/app/views/adicionarCategoria">Adicionar Categoria</a>
                    </li>
                </ul>
            </div>
        </nav>

        <form id="form-categorias" type="post">
            <div class="alinhar-centro">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" value="Adicionar">
                </div>
            </div>
        </form>


        <script src="/public/js/jquery-3.3.1.js"></script>
        <script src="/public/js/categoria.js"></script>
    </body>

</html>