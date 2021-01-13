<?php

class Produto {
  private $idProduto;
  private $nome;
  private $preco;

  private $operacao;
  private $con;

  public function setIdProduto($idProduto){
    $this->idProduto = $idProduto;
  }

  public function getIdProduto(){
    return  $this->idProduto;
  }

  public function setPreco($preco){
    $this->preco = $preco;
  }

  public function getPreco(){
    return $this->preco;
  }

  public function setOperacao($operacao){
    $this->operacao = $operacao;
  }

  public function getOperacao(){
    return $this->operacao;
  }

  function __construct(){
    $this->openConexao();
    date_default_timezone_set('America/Sao_Paulo');

  }

  public function openConexao() {
    $servidor = "localhost:8082";
    $banco = "estoque";
    $usuario = "root";
    $senha = "e9w86036f78sd9";

    $this->con = mysqli_connect($servidor,$usuario,$senha,$banco);
    $this->con->set_charset("utf8");

    if (mysqli_connect_errno()){
        echo "Falha na criação da conexão com o banco de dados: " . mysqli_connect_errno();
    }
  }

  public function constructorPOST(){
    
    if(isset($REQUEST["txtIdProduto"])){
      $this->setIdProduto($REQUEST["txtIdProduto"]);
    }

    if(isset($REQUEST["txtNome"])){
      $this->setNome($REQUEST["txtNome"]);
    }

    if(isset($REQUEST["txtPreco"])){
      $this->setPreco($REQUEST["txtPreco"]);
    }

    if(isset($REQUEST["btnOperacao"])){
      $this->setOperacao($REQUEST["btnOperacao"]);
    }

    else{
      $this->setOperacao("VAZIO");
    }

  }

  function insertProduto(){
    $sql = "INSERT INTO produto (nome, preco) VALUES ('{$this->nome}', '{$this->preco}')";

    if(!mysqli_query($this->con, $sql)){
      echo "Ocorreu um erro: " .mysqli_error($this->con). "<br>";
    }
  }

  function selectAll(){
    $sql = "SELECT * FROM produto";

    $resultado = mysqli_query($this->con, $sql);
    $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    mysqli_free_result($resultado);

    return $produtos;
  }
  
  function updateProduto(){
    $sql = "UPDATE produto SET nome = '{$this->nome}', preco = '{$this->preco}' WHERE idProduto = '{$this->idProduto}'";

    if(!mysqli_query($this->con, $sql)){
      echo "Ocorreu um erro: " .mysqli_error($this->con). "<br>";
    }
  }

  function deleteProduto(){
    $sql = "DELETE FROM produto WHERE idproduto '{$this->idProduto}'";
    
    if(!mysqli_query($this->con, $sql)){
      echo "Ocorreu um erro: " .mysqli_error($this->con). "<br>";
    }
  }

  function __destruct(){
    mysqli_close($this->con);
  }
}