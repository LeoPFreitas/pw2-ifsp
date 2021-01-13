<?php

$servidor = "localhost:8082";
$banco = "estoque";
$usuario = "root";
$senha = "e9w86036f78sd9";

$operacao = "";
$sql = "";

$operacao = "INSERIR";


$con = mysqli_connect($servidor,$usuario,$senha,$banco);
$con->set_charset("utf8");

if (mysqli_connect_errno()){
    echo "Falha na criação da conexão com o banco de dados: " .mysqli_connect_errno();
} else {
    echo "Conexão efetuada com sucesso! <br><br>";
}

if($operacao == "INSERIR") {

    $dataCriacao = date('Y-m-d H:i:s');

    $sql = "INSERT INTO produtos (nome, preco, descricao, data_criacao)
        VALUES ('Pao', 3.50, 'Pão feito manualmente', ''$dataCriacao')";

    if(!mysqli_query($con, $sql)){
        echo "Ocorreu um erro: " .mysqli_error($con). "<br>";
    } else {
        echo "Inserção efetuada com sucesso!";
    }

    mysqli_close($con);
}

if($operacao == "SELECIONAR"){
    $sql = "SELECT * FROM produtos";

    $resultado = mysqli_query($con, $sql);

    if(!$resultado){
        echo "ocorreu um erro: ". mysqli_error($con) . "<br>";
    } else {
        $produtos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

        //Imprime os dados obtidos
        //print_r($produtos);

        //Libera o $resultado da memória
        mysqli_free_result($resultado);

        //Exibindo o valor
        foreach ($produtos as $prod) {
            echo "IdProduto: " . $prod['idproduto'] . "<br>";
            echo "Nome: " . $prod['nome'] . "<br>";
            echo "Preço: " . $prod['preco'] . "<br>";
            echo "Descrição: " . $prod['descricao'] . "<br>";
            echo "Data Criação: " . $prod['data_criacao'] . "<br>";
            echo "===========================================<br>";
        }
    }

    mysqli_close($con);
}

if($operacao == "ATUALIZAR"){
    $idProduto = 1;

    $sql = "UPDATE produtos SET nome = 'Pão de metro', preco = 4.00 
        WHERE idProduto = '{$idProduto}'";

    mysqli_close($con)
}

if($operacao == "EXCLUIR"){
    $idProduto = 1;

    $sql = "DELETE FROM produtos
        WHERE idProduto = '{$idProduto}'";
    
    if(!$resultado){
        echo "ocorreu um erro: ". mysqli_error($con) . "<br>";
    } else {
        echo "Exclusão efetuada com sucesso!" . "<br>";
    }

    mysqli_close($con);
}