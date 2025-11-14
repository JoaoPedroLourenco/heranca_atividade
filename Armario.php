<?php 

require_once "Gaveta.php";

class Armario{
    private array $gavetas;

    public function __construct(array $gavetas){
        $this->setGavetas($gavetas);
    }

    public function setGavetas($array){
        $this->gavetas = $array;
    }

    public function getGavetas(){
        return $this->gavetas;
    }

    public function adicionarGaveta(Gaveta $gaveta){
        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta($indice){
        unset($this->gavetas[$indice]);
    }

    public function listarGavetas(){
       foreach($this->gavetas as $gaveta){
            return $gaveta;
       } 
    }

    public function __toString(): string {
        return "Armário com " . count($this->gavetas) . " gavetas";
    }
}