<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Exercicio 5 - Funções</title>

<style>
       
h1 {background-color: grey;}

h1, .container {
    text-align: center;
    box-shadow: black 2px 2px 10px;
    margin: auto;
    margin-top: 120px;
    max-width: 900px;
} 

.container {
    background-color: lightgrey;
    font-size: 2rem;
    font-weight: 600;

}

body {background-color: lightslategrey;}

div:hover {
    background-color: floralwhite;
    padding: 0.3px;
    cursor: pointer;
    opacity: 90%;
}
</style>

</head>
<body>

<article class="container">
    <h1>Calculando Média de Notas</h1>
    
    <?php
    function calcularMedia(float $n1, float $n2):float {
        return ($n1 + $n2) / 2;
    }

    function verificarSituacao(float $media):string {
        return ($media >= 7)?"Aprovado":"Reprovado";
    }
    ?>

    <?php
    $alunos = [
        ["nomeAluno" => "Tanaka", "nota1" => 7, "nota2" => 8],
        ["nomeAluno" => "Cleiton", "nota1" => 5, "nota2" => 6],
        ["nomeAluno" => "Cleide", "nota1" => 4, "nota2" => 7],
        ["nomeAluno" => "Cleber", "nota1" => 9, "nota2" => 9],
        ["nomeAluno" => "Claudio", "nota1" => 6, "nota2" => 5]
    ];

    foreach ($alunos as $aluno) {
        $media = calcularMedia($aluno["nota1"], $aluno["nota2"]);
        $situacao = verificarSituacao($media);
    ?>      
    
    <div style="color:<?=$situacao === "Aprovado" ? "blue" : "red" ?>"> 
       <p><?=$aluno["nomeAluno"]?> - Média: <?=$media?> - <?=$situacao?></p>    
    </div>
    
    <hr>
    <?php
    }
    ?>

</article>

</body>
</html>