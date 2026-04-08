<?php
    if($_GET){
        $controle = $_GET("controle");
        $metodo = $_GET("metodo");
        require_once "controllers/{$controle}.class.php";
        $obj = new $controle();
        $obj->$metodo();
    } else {
        // incluindo a classe 'inicioController' da pasta "/controllers"
        require_once "controllers/inicioController.class.php"; 
        // Criando objeto usando modelo (classe) 'inicioController' na memória
        $objeto = new inicioController;
        $objeto->inicio();
    }
?>