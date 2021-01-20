<?php

include("classes/Produto.php");

$produto = new Produto;

$produto->constructorPOST();

if($produto->getOperacao() == "INSERIR"){
    $produto->insertProduto();
}

$prodAll = $produto->selectAll();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Inserir Produto</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <hr>
        <h1 class="tabTitulo">Inserir Produto</h1>
        <hr>
        <form action="" method="POST">
            <br>           
            Nome <input class="posCampos" type="text" size="100"  maxlength ="100"  name="txtNome" value="" /><br><br>
            Preço <input class="posCampos" type="number" min="0" max="10" step=".5" name="txtPreco"  value="0" /><br><br>

            <div class="centralizar">
                <input type="submit" value="Inserir" name="btnOperacao" /> &nbsp; &nbsp;               
            </div>
            <br>

        </form>

        <hr class="linhaSep">
        <br>

        <div class="tabTitulo"> Lista de Produtos </div>
        
        <br> <br> 

        <table class="tabGeral">    
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>                
                    <th>Preço</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($prodAll as $prod) {   
                    $idProduto = $prod['idproduto'];
                    $nome = $prod['nome'];
                    $preco = $prod['preco'];
                    
                    echo "<tr>";
                    echo "<td>$idProduto</td>";
                    echo "<td>$nome</td>";
                    echo "<td>$preco</td>";
                    echo "<td><a href=produtoView.php?txtIdProduto=$idProduto>Alterar</a></td>";
                    echo "<td><a href=produtoDelete.php?txtIdProduto=$idProduto>Deletar</a>Excluir</td>";
                    echo "</tr>";
                }
            ?>

            </tbody>
        </table>

    </body>
</html>
