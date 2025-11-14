<?php 

require_once "Item.php";

class Gaveta{

    private array $itens;

    public function __construct(array $itens){
        $this->setItens($itens);
    }

    public function setItens($array = []){
        $this->itens = $array;
    }

    public function getItens(){
        return $this->itens;
    }

    public function adicionarItem(Item $item){
        $this->itens[] = $item;
    }

    public function removerItem($nome){
        foreach($this->itens as $indice => $item){
          if($item->getNome() === $nome){
            unset($this->itens[$indice]);
          }
        }
    }

    public function listarItens(){
        $retorno = "";

        foreach($this->itens as $item){
            $retorno .= "<ul><li>{$item}</li></ul> <br>";
        }

        return "Itens da gaveta:" . $retorno;
    }

    public function __toString(): string {
        return "Gaveta com " . count($this->itens) . " itens";
    }
}