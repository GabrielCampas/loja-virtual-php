<?php
    class Categorias {
        public function __construct(private int $id_categoria=0, private string $categoria_descricao=""){
            
        }

        #region get
        public function getCategoriaID(){
            $this->id_categoria;
        }

        public function getDescricao(){
            $this->categoria_descricao;
        }
        #endregion

        #region set
        public function setCategoriaID(){
            $this->id = $id_categoria;
        }

        public function setDescricao(){
            $this->descricao = $categoria_descricao;
        }
        #endregion

        # exibir
        public function ExibindoCategorias(int $contador){
            echo "<br><br>";
            echo "<strong>Categoria {$contador} ID: </strong> {$this->id_categoria} <br> <strong>Descrição da categoria:</strong> {$this->categoria_descricao}";
        }

    }
?>