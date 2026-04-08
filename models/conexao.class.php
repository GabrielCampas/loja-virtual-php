<?php
    class Conexao{
        public function __construct(protected $db=null){
            $parametros = "mysql:host=localhost;dbname=loja-virtual-php;charset=utf8mb4";
            try{
                // parametros, usuario e senha do banco de dados
                $this->db = new PDO($parametros, "root", "");
            }
            catch(PDOExecption $e){
                //erro
                echo $e.getCode();
                echo $e.getMessage();
                die("Tente novamente mais tarde.");  
            }          
        }
    }

?>