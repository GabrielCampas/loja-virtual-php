<?php
    class Itens {
        public function __construct(private int $id_item, private int $item_quantidade, private float $item_preco_unitario){
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