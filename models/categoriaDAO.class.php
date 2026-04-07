<?php
    class CategoriaDAO extends Conexao{
        public function __construct(){
            parent::__construct();
        }

        public function Inserir(){

        }
        public function Editar(){

        }
        public function Excluir(){

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
        
    }
?>