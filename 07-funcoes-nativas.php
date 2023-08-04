<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Funções Nativas PHP</title>

<style>
h1 {text-align: center;}

</style>    

</head>

<body>
    <h1>Exemplo de Funções Nativas:</h1>
    <hr>
    
    <h2>Strings</h2>
    <h3>trim() - Função que remove espaços antes e depois de strings.</h3>
    
    <?php
        $nome = "  Tanaka   ";
        $semEspaco = trim($nome);
    ?>

    <pre> <?=var_dump($nome)?> </pre>
    <pre> <?=var_dump($semEspaco)?> </pre>
    
    <h3>str_replace() - Função que permite substituição de strings/caracteres.</h3>
    
    <?php
        $fraseFeia = "Eliel bananão";
        $fraseElegante = str_replace(
            ["xarope","bananão"],["***","🤬"],$fraseFeia
        );
    ?>

    <p><?=$fraseFeia?></p>
    <p><?=$fraseElegante?></p>
    
    <h3>explode() - Função que transforma uma string numa array.</h3>
    
    <?php
        $linguagens = "HTML - CSS - JS - PHP";
        $arrayLinguagens = explode(" - ", $linguagens);
    ?>

    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>
    <hr>
    
    <h2>Númericas</h2>
    <h3>Min, Max, Round</h3>
    
    <?php
        $valores = [10, 5, 50, 100, 1000];
        $qualquerValor = 1259.78
    
    ?>

    <p><b>Menor Valor (min):</b><?=min($valores)?></p>
    <p><b>Maior Valor (max):</b><?=max($valores)?></p>
    <p><b>Arredondamento (round):</b><?=round($qualquerValor)?></p>
    <hr>

    <h2>Arrays</h2>
    <h3>implode() - Função que transforma array numa string.</h3>
    
    <?php
        $cantores = ["Kevin", "Paiva", "Hariel"];
        $textoCantor = implode(" - ", $cantores);
    ?>
    
    <pre><?=var_dump($cantores)?></pre>
    <pre><?=var_dump($textoCantor)?></pre>
    <hr>

    <h2>Filtros</h2>
    
    <hr>

    <h2>Segurança</h2>
    

</body>
</html>