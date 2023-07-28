<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Condicionais</title>

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
    <h1>Estruturas Condicionais</h1>
    <hr>
    
    <h2>Simples:</h2>
    <?php
        $numero = 5;

        // Sintaxe com as chaves:
        if ($numero > 1) {
            echo "<p>$numero é maior que 1!</p>";
        }

        // Sintaxe sem as chaves:
        if ($numero > 1) echo "<p>$numero é maior que 1!</p>";
    ?>

    <h2>Composta:</h2>
    <?php
        $produto = "Ultrabook Asus";
        $qtdEmEstoque = 0;
        $qtdMinima = 15;

        echo "<h3>$produto</h3>";
        echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

        if ($qtdEmEstoque < $qtdMinima){
            echo "<p class='comprar'>É necessário reabastecer!</p>";

            // Condicional ANINHADA (ambos tem que ser verdadeiros)
            if($qtdEmEstoque == 0){
                echo "<p class=\"zerado\">Estoque zerado!</p>";
            }

        } else {
            echo "<p class='normal'>Estoque Normal</p>";
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

        echo "<h3>Opção: $opcaoEscolhida</h3>";

        if ($opcaoEscolhida == 1) {
            echo "<p>Lanche sendo feito!</p>";
        } elseif($opcaoEscolhida == 2) {
            echo "<p>Pizza sendo feita!</p>";
        } elseif ($opcaoEscolhida == 3) {
            echo "<p>Paçoca a caminho!</p>";
        } else 
            echo "<p>Opção Inválida!</p>";



    // Exemplo: (==: Igual apenas no valor!) e (===: Idêntico no valor e tipo!)
    echo "<hr>";    
    
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