<?php
    require_once "../models/conexao.class.php"
    require_once "../models/categoriaDAO.class.php"

    class categoriaController{
        public function listar(){
            // buscando os dados para apresentação em views
            $categoriaDAO = new CategoriaDAO();
            $retorno = $categoriaDAO->BuscarTodas();

            /*echo "<pre>";
            var_dump($retorno);
            echo "<pre>";*/
            
            // apresentando os dados
            require_once "../views/listar_categorias.php";
        }
    }
?>