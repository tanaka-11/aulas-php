<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Condicionais - Versão 2</title>

    <style>
        .zerado {
            color: red;
            background-color: lightgrey;
            font-weight: bold;
        }

        .comprar {
            color: darkgoldenrod;
            background-color: lightgrey;
        }

        .normal {
            color: darkblue;
            background-color: lightgray;
        }
    </style>

</head>

<body>
    <h1>Estruturas Condicionais - Versão 2</h1>
    <hr>
    
    <h2>Simples:</h2>
    <?php
        $numero = 5;
        if ($numero > 1){
    ?>
        <p><b><?=$numero?></b> é maior que 1!</p>
    <?php
        }    
        if ($numero > 1) echo "<p><b>$numero</b> é maior que 1!</p>";
    ?>

    <h2>Composta:</h2>
    <?php
        $produto = "Ultrabook Asus";
        $qtdEmEstoque = 0;
        $qtdMinima = 15;
    ?> 
        <h3><?=$produto?></h3>
        <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>
    <?php    
        if ($qtdEmEstoque < $qtdMinima){
    ?>        
        <p class="comprar">É necessário reabastecer!</p>
    <?php    
        if($qtdEmEstoque == 0){
    ?>            
        <p class="zerado">Estoque zerado!</p>
    <?php    
    }

        } else {
    ?>        
        <p class='normal'>Estoque Normal</p>
    <?php    
        }
    ?>    
    
    <h2>Encadeada:</h2>
    <?php
    //- Opções para o exemplo -
    // 1 -> Lanche
    // 2 -> Pizza
    // 3 -> Paçoca
    // Qualquer outra -> Opção Inválida!

        $opcaoEscolhida = 1; // Comece com qualquer valor
    ?>    
        <h3>Opção: <?=$opcaoEscolhida?></h3>
    <?php    
        if ($opcaoEscolhida == 1) {
    ?>        
        <p>Lanche sendo feito!</p>
    <?php    
        } elseif($opcaoEscolhida == 2) {
    ?>        
        <p>Pizza sendo feita!</p>
    <?php    
        } elseif ($opcaoEscolhida == 3) {
    ?>        
        <p>Paçoca a caminho!</p>
    <?php    
        } else
    ?>     
        <p>Opção Inválida!</p>
    <hr>    
    
    <!-- 1ª Refatoração usando outra variavel para passar a mensagem: -->
    <?php    
        if ($opcaoEscolhida == 1) {
            $mensagem = "Lanche sendo feito!";
        
        } elseif($opcaoEscolhida == 2) {
            $mensagem = "Pizza sendo feita";
        } elseif ($opcaoEscolhida == 3) {
            $mensagem = "Paçoca a caminho";
        } else
            $mensagem = "Opção Inválida!";
    ?>   
    
    <!-- 2ª Refatoração usando Switch/Case: -->
    <?php
        switch($opcaoEscolhida){
            case 1: $mensagem = "Lanche"; break;
            case 2: $mensagem = "Pizza"; break;
            case 3: $mensagem = "Paçoca"; break;
            default: $mensagem = "Help"; break;
        }

    ?>    

    <?php    
    // Exemplo: (==: Igual apenas no valor!) e (===: Idêntico no valor e tipo!   
    $a = 10;
    $b = "10";
    $resultado = $a === $b; // LÓGICO ou BOOLEAN
    var_dump($resultado);

    echo "<br>";
    var_dump($a);
    echo "<br>";
    var_dump($b);

    /* Em resumo, ao comparar com dois sinais de igual a comparação será feita APENAS em relação aos VALORES!
    
    E ao comparar com três sinais de igual a comparação será feita em relação ao VALOR e ao TIPO de DADOS. Portanto é mais restritivo!
    */    
    ?>

</body>

</html>