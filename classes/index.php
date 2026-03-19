<?php
    require_once "produto.class.php";
    require_once "itens.class.php";
    require_once "usuario.class.php";
    require_once "categoria.class.php";
    require_once "venda.class.php";

    echo "<h1>Loja virtual</h1>";
    echo "<hr>";
    # user 1
    $usuario1 = new Usuario(1, "Pedro", "pedro@gmail.com", "50129", "Administrador");
    # user 2
    $usuario2 = new Usuario(2, "Maria", "maria@gmail.com", "1025ABC", "Cliente");

    # prod 1
    $produto1 = new Produto(1, "Camiseta", "Camiseta Adidas", 69.99, 14);
    # prod 2
    $produto2 = new Produto(2, "Tênis", "Tênis Nike tamanho 41", 120, 26);

    # venda 1
    $venda1 = new Vendas(1, "18/03/2026");
    # venda 2
    $venda2 = new Vendas(2, "14/02/2025");

    # categoria 1
    $categoria1 = new Categorias(1, "Roupas masculinas");
    # categoria 2
    $categoria2 = new Categorias(2, "Roupas femininas");

    # item 1
    $item1 = new Itens(1, 14, 69.99);
    # item 2
    $item2 = new Itens(2, 26, 120);

    echo "<h3>Exibindo usuários cadastrados no sistema: </h3>";
    $usuario1->ExibindoUser(1);
    $usuario2->ExibindoUser(2);
    echo "<br><br>";
    echo "<hr>";
    echo "<h3>Exibindo produtos cadastrados no sistema: </h3>";
    $produto1->ExibindoProd(1);
    $produto2->ExibindoProd(2);
    echo "<br><br>";
    echo "<hr>";
    echo "<h3>Exibindo itens cadastrados no sistema: </h3>";

    echo "<br><br>";
    echo "<hr>";
    echo "<h3>Exibindo vendas cadastradas no sistema: </h3>";
    $venda1->ExibindoVenda(1);
    $venda2->ExibindoVenda(2);
    echo "<br><br>";
    echo "<hr>";
    echo "<h3>Exibindo categorias do sistema: </h3>";
    $categoria1->ExibindoCategorias(1);
    $categoria2->ExibindoCategorias(2);

?>