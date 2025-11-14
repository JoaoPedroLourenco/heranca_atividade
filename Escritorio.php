<?php 

require_once "Armario.php";
require_once "Gaveta.php";

class Escritorio{
    private array $armarios;

    public function __construct(array $armarios){
        $this->setArmarios($armarios);
    }

    public function setArmarios($array){
        $this->armarios = $array;
    }

    public function adicionarArmario(Armario $armario){
        $this->armarios[] = $armario;
    }

    public function removerArmario($indice){
        unset($this->armarios[$indice]);
    }

    public function listarArmarios(){
       foreach($this->armarios as $armario){
            echo $armario;
       } 
    }

    public function auditoria(){
        foreach($this->armarios as $armario){
            echo "{$armario} <br>";
            foreach($armario->getGavetas() as $gaveta){
              echo "{$gaveta}: <br>";
                foreach($gaveta->getItens() as $item){
                    echo "{$item} <br>";
                }
            }
        }
    }
}