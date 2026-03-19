<?php
    class Itens {
        public function __construct(private int $id_item, private int $item_quantidade, private float $item_preco_unitario){
        }
        public function ExibindoItem(){
            echo "<br><br>";
            echo "<strong>ID do Item: </strong> {$this->getItemId()} <br> <strong>Preço Unitário:</strong> RS{$this->getItemPrecounit()} <br> <strong>Quantidade:</strong> {$this->getItemQuant()} <br>";
        }

        #get
        public function getItemId(){
            return $this->id_item;
        }

        public function getItemQuant(){
            return $this->item_quantidade;
        }

        public function getItemPrecoUnit(){
            return $this->item_preco_unitario;
        }

        #set
        public function setItemId(){
            $this->id = $id_item;
        }
        
        public function setItemQuant(){
            $this->quantidade = $item_quantidade;
        }

        public function setItemPrecoUnit(){
            $this->precounit = $item_preco_unitario;
        }
    }
?>