<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Arrays</title>

    <style>
        ul li:nth-child(odd) {color: blue;}
        ul li:nth-child(even) {color: red;}
    </style>

</head>

<body>
    <h1>Trabalhando com Arrays (Vetores e Matrizes)</h1> 

    <hr>

    <h2>Arrays com índice númerico:</h2>

    <?php
        // Sintaxe com colchetes:
        $cantor = ["Kevin","Paiva","Hariel"];

        // Sintaxe com função array():
        $cursos = array("HTML","Node","PHP");

        // Sintaxe de atribuição manual:
        $comida[0] = "Bolinho de queijo";
        $comida[1] = "Pastel";
        $comida[2] = "Torresmo";

        // Constantes de array (PHP 7+):
        define("UNIDADES",["Penha","Tatuapé", "Vila prudente"]);
        const FRUTAS = ["Morango","Manga"];
    ?>

    <h3>Acessando os dados</h3>
    <ol>
        <li>Cantor favorito: <b><?=$cantor[0]?></b></li>
        <li>Curso básico de: <b><?=$cursos[2]?></b></li>
        <li>Quero comer: <b><?=$comida[1]?></b></li>
        <li>Estamos no Senac <b><?=UNIDADES[0]?></b></li>
        <li>Fruta boa para caipirinha: <b><?=FRUTAS[0]?></b></li>
    </ol>

    <hr>

    <h2>Array Associativo:</h2>
    <?php
        $curso = [
            // Chave associativa:
            // indentificador => valor
            "titulo" => "PHP",
            "carga_horaria" => 150,
            "descritivo" => "Curso para iniciantes em PHP"
        ];
    ?>

    <h3>Acessando os dados (array associativo)</h3>

    <p>Nome do curso: <b><?=$curso["titulo"]?></b></p>
    <p>Carga horaria: <b><?=$curso["carga_horaria"]?> </b>horas.</p>
    <p>Descrição: <b><?=$curso["descritivo"]?></b></p>

    <hr>

    <h2>Matriz (array dentro de array):</h2>
    <?php
        $planoDeEstudos = [
            ["JS Avançado", "Node.js", "React"],
            ["PHP", "POO", "MySQL", "Python"],
            ["Cores", "Photoshop", "UX/UI"]
        ];
    ?>

    <h3>Acessando os dados (matriz)</h3>
    <ul>
        <li><?=$planoDeEstudos[0][2]?></li>
        <li><?=$planoDeEstudos[1][2]?></li>
        <li><?=$planoDeEstudos[2][1]?></li>
        <li><?=$planoDeEstudos[2][0]?></li>
    </ul>

    <hr>

    <h2>Funções de análise de estruturas de dados (debug/depuração):</h2>
    
    <h3>print_r() :</h3>

    <pre>
     <?=print_r($cantor)?>    
    </pre>    
        
    <h3>var_dump() :</h3>

    <pre>
     <?=var_dump($cantor)?>
    </pre>     

    <h3>var_dump da matriz:</h3>
    <pre>
     <?=var_dump($planoDeEstudos)?>
    </pre>


</body>

</html>