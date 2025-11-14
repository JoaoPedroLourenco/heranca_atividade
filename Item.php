<?php 

Class Item{
    private string $nome;
    private string $descricao;

    public function __construct(string $nome, string $descricao)
    {
        $this->setNome($nome);
        $this->setDescricao($descricao);
    }

    public function setNome($nome){
        if(!empty($nome)){
            $this->nome = $nome;
        }
    }

    public function getNome(){
        return $this->nome;
    }

    public function setDescricao($descricao){
        if(!empty($descricao)){
            $this->descricao = $descricao;
        }
    }

    public function getDescricao(){
        return $this->descricao;
    }
}