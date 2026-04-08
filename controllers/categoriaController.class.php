<?php
<<<<<<< HEAD
    require_once "../models/conexao.class.php";
    require_once "../models/categoriaDAO.class.php";
    require_once "../models/categoria.class.php";
=======
    require_once "../models/conexao.class.php"
    require_once "../models/categoriaDAO.class.php"
>>>>>>> b9a7d4e0aaf4112b246b0777615732e6434f59fb

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
<<<<<<< HEAD

        public function inserir(){
            $msg="";
            if($_POST){
                // verificacao do preenchimento de dados
                if(empty($_POST["descricao"])){
                    $msg="Categoria não nomeada.";
                } else {
                    // inserir nova categoria no banco de dados
                    $categoria = new Categorias(0, $_POST["descricao"]);
                    $categoriaDAO = new CategoriaDAO();
                    $retorno = $categoriaDAO->cadastrar($categoria);
                    header("Location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
                    die();
                }
            }
            require_once "../views/form_categoria.php";
        }

        public function excluir(){
            if($_GET && isset($_GET["id"])){
                // excluindo fisicamente do banco de dados
                $categoria = new Categorias($_GET["id"]);
                $categoriaDAO = new CategoriaDAO();
                $retorno = $categoriaDAO->deletar($categoria);
                header("Location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
                die();
            }
        }
=======
>>>>>>> b9a7d4e0aaf4112b246b0777615732e6434f59fb
    }
?>