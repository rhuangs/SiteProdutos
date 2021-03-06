<?php

session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
    header("Location:/index.php?error=true");
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Adicionar Categoria</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="/public/img/favicon.png">
    <link rel="stylesheet" href="/public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/meu-css.css">
    <script src="/public/js/jquery-3.3.1.js"></script>
    <script src="/public/js/popper.js"></script>
    <script src="/public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Produtos
        </button>
        <div class="dropdown-menu">
            <a class="nav-link" href="/app/views/listarProdutos">Lista dos Produtos</a>
            <a class="nav-link" href="/app/views/adicionarProduto">Adicionar Produtos</a>
        </div>
    </div>
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Categorias
        </button>
        <div class="dropdown-menu">
            <a class="nav-link" href="/app/views/listarCategorias">Lista das Categoria</a>
            <a class="nav-link" href="/app/views/adicionarCategoria">Adicionar Categoria</a>
        </div>
    </div>
    <div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/app/index.php?controller=logout">Logout</a>
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
<script src="/public/js/adicionaCategoria.js"></script>
</body>

</html>