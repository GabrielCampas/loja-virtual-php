<?php
    class Usuario {
        public function __construct(private int $id_usuario, private string $usuario_nome="", private string $usuario_email="", private string  $usuario_senha="", private string $usuario_perfil="") {
        }

        # pegando o nome
        public function getNome(){
            return $this->usuario_nome;
        }

        # pegando a senha
        public function getSenha(){
            return $this->usuario_senha;
        }

        # pegando novo conteudo em nome
        public function setNome(string $usuario_nome){
            $this->usuario_nome = $usuario_nome;
        }

        # pegando novo conteudo em senha
        public function setSenha(string $usuario_senha){
            $this->usuario_senha = $usuario_senha;
        }
        
        # pegando email
        public function getEmail(){
            return $this->usuario_email;
        }

        # pegando perfil do usuario
        public function getPerfil(){
            return $this->usuario_perfil;
        }

        # pegando id
        public function getID(){
            return $this->id_usuario;
        }
    
        # exibindo os dados
        public function ExibindoUser(int $contador){
            echo "<br><br>";
            echo "<strong>ID do Usuário {$contador}:</strong> {$this->id_usuario} <br> <strong>Nome do Usuário:</strong> {$this->usuario_nome} <br> <strong>Email do Usuário:</strong> {$this->usuario_email} <br> <strong>Perfil do Usuário:</strong> {$this->usuario_perfil}";
        }
    }

?>