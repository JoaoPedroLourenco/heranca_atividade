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
      echo "<strong>Armário(s): </strong><br>";
       foreach($this->armarios as $armario){
            echo $armario . "<br>";
       } 
    }

    public function auditoria(){
    echo "<ul>";

    foreach($this->armarios as $armario){
        echo "<li>";
        echo "<p>{$armario}</p>";

        echo "<ul>";
        foreach($armario->getGavetas() as $gaveta){
            echo "<li>";
            echo "<p>{$gaveta}</p>";

            echo "<ul>";
            foreach($gaveta->getItens() as $item){
                echo "<li>{$item}</li>";
            }
            echo "</ul>";
            echo "</li>";
        }
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
}
}