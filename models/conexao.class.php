<?php
    class Conexao{
        public function __construct(protected $db=null){
<<<<<<< HEAD
            $parametros = "mysql:host=localhost;dbname=loja-virtual-php;charset=utf8mb4";
=======
            $parametros = "mysql:host=localhost;dbname=loja-virtual;charset=utf8mb4";
>>>>>>> b9a7d4e0aaf4112b246b0777615732e6434f59fb
            try{
                // parametros, usuario e senha do banco de dados
                $this->db = new PDO($parametros, "root", "");
            }
            catch(PDOExecption $e){
                //erro
                echo $e.getCode();
                echo $e.getMessage();
<<<<<<< HEAD
                die("Tente novamente mais tarde.");  
=======
                die("Tente novamente mais tarde");  
>>>>>>> b9a7d4e0aaf4112b246b0777615732e6434f59fb
            }          
        }
    }

?>