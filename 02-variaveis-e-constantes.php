<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Variáveis e Constantes</title>
</head>

<body>
    <h1>Manipulando dados na memória</h1>
    <hr>
    
    <?php
        // Variáveis
        // String (Caractere)
        $curso = "Téc. em Informática para Internet";

        // Inteiro (Integer)
        $ano = 2023;

        // Float (Real)
        $preco = 2500.50;

        // Saida de dados
        echo "<h2> Saída de dados usando echo na sintaxe COMPLETA!</h2>";

        // Sem estrutura/tag
        echo $curso;

        // Interpolação
        echo "<p>$curso</p>";
        // Interpolação com aspas unicas vira uma string.
        echo '<p>$curso</p>';
        
        // Concatenação
        echo "<p>.$curso.</p>";

        echo "<p>Ano Letivo: $ano</p>";
        echo "<p> <b>Preço</b>: $preco</p>";
    ?>

    <h2>Saída de dados usando sintaxe SIMPLIFICADA</h2>
    <!-- Saida pelo HTML com a variável -->
    <p> <?php echo $curso?> </p>

    <!-- Versão simplificada passando a variável com o atributo "?= $...?" -->
    <p> <?= $curso?> </p>

    <!-- Concatenação passando a variável direto no parágrafo -->
    <p>Estamos fazendo o curso <?=$curso?> no ano de <?=$ano?>.</p>

    <?php
        // Constantes (Sempre declarar com as letras maiúsculas)

        // 1ª forma: Usando a função "define()"
        define("MEU_NOME", "Marina Tanaka");

        // 2ª forma: Usando a palavra-chave "const"
        const UNIDADE = "Penha";

        // Saída de dados constantes
        echo MEU_NOME;
        echo "<p><b>".MEU_NOME."</b></p>";
    ?>
        <!-- Saída Simplificada -->
        <p>Me chamo <b><?=MEU_NOME?></b> e estou no Senac <?=UNIDADE?>.</p>

</body>

</html>