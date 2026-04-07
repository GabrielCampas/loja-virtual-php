<?php
    require_once "header.php";



?>

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