<?php
    require_once "produto.class.php";

    class Vendas{
        public function __construct(private int $id_venda, private string $venda_data=""){
            
        }

        # get
        public function getVendaID(){
            $this->id_venda;
        }

        public function getVendaData(){
            $this->venda_data;
        }

        # set
        public function setVendaID(){
            $this->id = $id_venda;
        }

        public function setVendaData(){
            $this->data = $venda_data;
        }

        public function ExibindoVenda(int $contador){
            echo "<br><br>";
            echo "<strong>Venda {$contador} ID: </strong> {$this->id_venda} <br> <strong>Data da venda:</strong> {$this->venda_data}.";
        }
    }
?>