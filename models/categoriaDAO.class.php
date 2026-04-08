<?php
    class CategoriaDAO extends Conexao{
        public function __construct(){
            parent::__construct();
        }

        public function Inserir(){

        }
        public function Editar(){

        }
<<<<<<< HEAD
        public function deletar($categoria){
            $sql = "DELETE FROM categorias WHERE id_categoria = ?";
            try{
                $stm = $this->db->prepare($sql);
                // substituindo o ponto de interrogação de VALUES
                $stm->bindValue(1, $categoria->getCategoriaID());
                $stm->execute();
                // fechando conexao
                $this->db = null;
                return "Categoria excluída com sucesso.";
            } catch(PDOException $e){
                $this->db = null;
                return "Problema ao excluir a categoria.";
            }
=======
        public function Excluir(){

>>>>>>> b9a7d4e0aaf4112b246b0777615732e6434f59fb
        }
        public function BuscarTodas(){
            $sql = "SELECT * FROM categorias";
            try{
                // prepara a frase sql para evitar sql injection
                $stm = $this->db->prepare($sql);
                // executando
                $stm->execute();
                // fechando a conexão
                $this->db = null;
                return $stm->fetchAlll(PDO::FETCH_OBJ);
            } 
            catch(PDOException $e){
                // fechando a conexão
                $this->db=null;
                return "Erro ao buscar categorias.";
            }
        }
        public function BuscarUma(){

        }
<<<<<<< HEAD
        public function cadastrar($categoria){
            $sql = "INSERT INTO categorias (descritivo) VALUES(?)";
            try{
                $stm = $this->db->prepare($sql);
                // substituindo o ponto de interrogação de VALUES
                $stm->bindValue(1, $categoria->getDescricao());
                $stm->execute();
                // fechando conexao
                $this->db = null;
                return "Categoria inserida com sucesso.";
            } catch(PDOException $e){
                $this->db = null;
                return "Problema ao cadastrar uma nova categoria.";
            }
        }
=======
        
>>>>>>> b9a7d4e0aaf4112b246b0777615732e6434f59fb
    }
?>