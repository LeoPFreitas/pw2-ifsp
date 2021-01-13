<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("classes/Animal.php");
        include("classes/Usuario.php");
        include("classes/Financeiro.php");
    
        $gato = new Animal;
        $gato->nome = "Balthazar";
        $gato->raca = "Vira Lata";

        $gato->imprimirDados();

        $user1 = new Usuario;
        $user1->setNome("Zé lele");
        $user1->setIdade(33);

        $user1->imprimirDados();

        $conta = new Financeiro;

        $conta->saldoCaixa = 1000.00;

        $conta->imprimirDados();
    ?>
</body>
</html>