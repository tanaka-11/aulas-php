<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5 - Funções</title>

<style>
h1 {text-align: center;}

</style>

</head>
<body>
    <h1>Calculando Média de Notas</h1>
    <?php
        function soma($nota1,$nota2){
            $media = ($nota1 + $nota2) / 2;
            return $media;
    }
    ?>

    <?php
        $media = soma(10,5);  
    ?>

    <?php
    function situacao($media) {
        if ($media >= 7) {
            return "Aprovado";
        }
            return "Reprovado";
    }     
    ?>

    <p>Média: <?=$media?> </p> 
    <p>Situação: <?=situacao($media)?></p>


</body>
</html>