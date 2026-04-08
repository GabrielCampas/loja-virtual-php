<?php
    require_once "header.php";



?>

<<<<<<< HEAD
<div class="content">
    <div class="container">
        <div>
            <?php
                if($_GET && isset($_GET["msg"])){
                echo "<h3>{$_GET['msg']}</h3>";
                }
            ?>
        </div>
        <br>
        <a href="index.php?controle=categoriaController&metodo=inserir" class="btn btn-primary">Nova Categoria</a>
        <br><br>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            <?php
                foreach($retorno as $dado){
                    echo "<tr>";
                    echo "<td>{$dado->id_categoria}</td>";
                    echo "<td>{$dado->descricao}</td>";
                    echo "<td><a class='btn btn-danger' href='index.php?controle=categoriaController&metodo=excluir&id={$dado->id_categoria}'>Excluir</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</div>
=======
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Descrição</th>
    </tr>
    <?php
        foreach($retorno as $dado){
            echo "<tr>";
            echo "<td>{$dado->id_categoria}</td>";
            echo "<td>{$dado->descricao}</td>";
            echo "</tr>";
        }
    ?>
</table>
>>>>>>> b9a7d4e0aaf4112b246b0777615732e6434f59fb
