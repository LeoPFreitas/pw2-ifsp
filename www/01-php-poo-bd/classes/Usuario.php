<?php

class Usuario {
    private $nome;
    private $idade;

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade($idade){
        if($idade > 105){
            echo "Idade invalida.";
            return;
        }

        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function imprimirDados(){
        echo "Nome: $this->nome <br>";
        echo "Idade: $this->idade <br>";
    }


}
