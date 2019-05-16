<?php

require_once __DIR__ . "/../../lib/DB.php";

class ProdutoModel
{
    public static function adicionaProduto($descricao, $categoria, $valor_custo, $valor_venda)
    {
        return DB::query("INSERT INTO produtos (descricao, categoria, valor_custo, valor_venda)
                              VALUES ('{$descricao}', '{$categoria}', '{$valor_custo}', '{$valor_venda}')");
    }

    public static function listaProduto()
    {
        return DB::query("SELECT * FROM produtos");
    }

    public static function deletarProduto($id)
    {
        return DB::query("DELETE FROM produtos WHERE id= '{$id}' ");
    }

    public static function idProduto($id)
    {
        return DB::query("SELECT * FROM produtos WHERE id='{$id}'");
    }

    public static function editarProduto($descricao, $categoria, $valor_custo, $valor_venda)
    {
        return DB::query("UPDATE produtos SET descricao='{$descricao}', categoria='{$categoria}'
                                valor_custo='{$valor_custo}', valor_venda='{$valor_venda}'");
    }
}