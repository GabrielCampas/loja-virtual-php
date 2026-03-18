<?php
    class Produto {
        public function __construct(private int $id_produto, private string $produto_nome="", private string $produto_desc="", private float $produto_preco=0.0, private int $produto_estoque=0){

        } 
        
        # get 
        public function getProdutoID(){
            return $this->id_produto;
        }

        public function getProdutoNome(){
            return $this->produto_nome;
        }

        public function getProdutoDesc(){
            return $this->produto_desc;
        }

        public function getProdutoPreco(){
            return $this->produto_preco;
        }

        public function getProdutoEstoque(){
            return $this->produto_estoque;
        }

        # set
        public function setProdutoID(){
            $this->id = $id_produto;
        }
        
        public function setProdutoNome(){
            $this->nome = $produto_nome;
        }

        public function setProdutoPreco(){
            $this->preco = $produto_preco;
        }

        public function setProdutoDesc(){
            $this->descricao = $produto_desc;
        }
        
        public function setProdutoEstoque(){
            $this->estoque = $produto_estoque;
        }

         # exibindo produtos
        public function ExibindoProd(int $contador){
            echo "<br><br>";
            echo "<strong>Produto {$contador}: </strong> {$this->getProdutoNome()} <br> <strong>Preço:</strong> RS{$this->getProdutoPreco()} <br> <strong>Descrição:</strong> {$this->getProdutoDesc()} <br> <strong>Estoque:</strong> {$this->getProdutoEstoque()} unidades";
        }
    }
?>