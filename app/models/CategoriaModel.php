<?php

include __DIR__ . "/../../lib/DB.php";

class CategoriaModel
{
    static function adicionaCategoria($nome)
    {
        return DB::query("INSERT INTO categorias (nome) VALUES ('{$nome}')");
    }

    static function listaCategorias()
    {
        return DB::query("SELECT * FROM categorias");
    }
}