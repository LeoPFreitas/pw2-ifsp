<?php

class Financeiro {
    public $saldoCaixa;
    private $inicioAcesso;
    private $fimAcesso;

    function __construct() {
        date_default_timezone_set('America/Sao_Paulo');
        $this->inicioAcesso = date('Y-m-d H:I:s');
        echo "Dentro do construtor: $this->inicioAcesso <br>";
    }

    function imprimirDados(){
        echo "Saldo Inicial: $this->saldoCaixa <br>";
        sleep(5);
    }

    function __destruct(){
        $this->fimAcesso = date('Y-m-d H:I:s');
        echo "Dentro do destrutor $this->fimAcesso <br>";
    }
}