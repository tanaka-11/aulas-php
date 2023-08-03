<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5 - Funções</title>

<style>
h1 {
    text-align: center;
    background-color: grey;

    margin: auto;
    width: 950px;
}
.container {
    text-align: center;
    background-color: lightgrey;
    box-shadow: black 2px 2px 10px;
    
    margin: auto;
    width: 950px;

    font-size: 2rem;
}

</style>

</head>
<body>

    <h1>Calculando Média de Notas</h1>

    <?php
    function calcularMedia($nota1, $nota2) {
        return ($nota1 + $nota2) / 2;
    }

    function verificarSituacao($media) {
        return ($media >= 6) ? "Aprovado":"Reprovado";
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
    ?>

    <div class="container"> 
    <?php
    foreach ($alunos as $aluno) {
        $media = calcularMedia($aluno["nota1"], $aluno["nota2"]);
        $situacao = verificarSituacao($media);
        
        echo "<div style='color:".($situacao === "Aprovado"?"blue":"red")."'>";
        echo $aluno["nomeAluno"]." - Média: ".$media." ".$situacao;
        echo "</div>";
    }
    ?>
    </div>

</body>
</html>