<?php

// ADICIONAR O CÓDIGO PHP
                    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Excluir Produto</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <hr>
        <h1 class="tabTitulo">Excluir Produto</h1>
        <hr>
        <form action="" method="POST">
            <br>

            ID <input class="posCampos" type="number" min="0" max="10000" step="1" name="txtIdProduto" value="00000" readonly="" /><br><br>
            Nome <input class="posCampos" type="text" size="100"  maxlength ="100"  name="txtNome" value="00000" readonly="" /><br><br>
            Média <input class="posCampos" type="number" min="0" max="10" step=".5" name="txtPreco"  value="00000" readonly="" /><br><br>

            <br><br>
            <div class="msgExcluir">    
                Deseja realmente excluir este registro?
            </div>
            <br><br>

            <div class="centralizar">                                
                <input type="submit" value="Excluir" name="btnOperacao" /> &nbsp; &nbsp;
                <input type="submit" value="Cancelar" name="btnOperacao" /> &nbsp; &nbsp;
            </div>
            <br>

        </form>         
    </body>
</html>
