<?php

class Animal {
    // Atributos
    public $nome;
    public $raca;

    // Metodos
    public function imprimirDados(){
        echo "Nome: $this->nome <br>";
        echo "Raça: $this->raca <br>";
    }
}
