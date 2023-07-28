<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Loops PHP</title>

    <style>
        h1,h2 {text-align: center;}
    </style>    

</head>

<body>
    <h1>Estruturas de Controle de Repetição:</h1>
    <hr>

    <h2>WHILE - (Enquanto)</h2>
    <!-- Versão com o comando "ECHO": 
        while($i <= 5){
        echo "<p>$i</p>";
        $i++;
        }
    -->
    
    <!-- Versão com o HTML separado: -->
    <?php
        $i = 1;
        while($i <= 5) {
    ?>

    <p style="font-weight: bold;"><?=$i?></p>
    
    <?php       
        $i++;   
    }
    ?>
    
    <hr>

    <h2>DO/WHILE - (Repita)</h2>
    <?php
        $j = 1;
        do {
    ?>

    <div>
      <h3>Lorem <?=$j?>...</h3>
      <p>Lorem ipsum dolor sit amet.</p>
    </div>

    <?php        
        $j++;
        } while ($j <= 4);
    ?>

    <hr>

    <h2>FOR - (Para)</h2>
    <?php
        for ($i = 1; $i <= 3; $i++){
    ?> 
    <p> <code>i</code> vale:<b> <?=$i?> </b></p>
    <?php
        }
    ?>

    <!-- Mini-exercícios 
    1) Crie um array com os nomes dos meses do ano
    2) Usando um loop, acesse e mostre os meses dentro de uma lista odernada
    -->
    <hr>

    <h2>Mini-exercícios</h2>

    <?php
        $meses = ["Janeiro","Fevereiro", "Março","Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    
    ?>
    <ol> <!-- Abrindo a Lista -->
    <?php        
        for ($i = 0; $i < 12; $i++){
    ?>
    <li><?=$meses[$i]?></li>
    <?php
    }
    ?>
    </ol> <!-- Fechando a Lista -->
    <hr>

    <h2>Exemplo da função count():</h2>
    <?php
        $alunos = [
            "Melissa", "Tanaka", "Zimbo",
            "Kaue", "Eduardo"
        ];

        /* Função: count() ou sizeof() - conta a quantidade de elementos dentro de um array, retornando um número inteiro.*/
        
        /* Guardamos em "cache"(memória) a quantidade de elementos, evitando assim a contagem a cada iteração do loop e melhorando perfomance. */
        $quantidade = count($alunos);
        
        for ($i=0; $i < $quantidade; $i++){ 
    ?>
    <p><b>Nome: </b><?=$alunos[$i]?></p>
    <?php
    }
    ?>

    <hr>

    <h2>FOREACH (para cada)</h2>
    <p>Mais útil e fácil para se lidar com arrays</p>

    <ol>
    <?php
        foreach($meses as $x) { 
    ?>
    <li> <?=$x?> </li>
    <?php
    }
    ?>
    </ol>

    <hr>

    <h2>Manipulando Arrays Associativos</h2>
    <?php
        $clubes = [
            "São Paulo" => "Time 1",
            "Corinthians" => "Time 2",
            "Palmeiras" => "Time 3",
            "Santos" => "Time 4"
        ];

        foreach($clubes as $clube => $apelido){
    ?>
    <p><?=$apelido?> é o <?=$clube?>.</p>
    <?php
    }
    ?>

    <hr>

    <h2>Loop com Matriz</h2>
    <h3>Exemplo com FOR aninhado:</h3>
    <?php
        $planoDeEstudos = [
            ["HTML", "CSS", "JS"],
            ["React", "React Native"]
        ];

        for ($linha = 0; $linha < count($planoDeEstudos); $linha++){
            for ($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++){
    ?>
    <p><i><b> <?=$planoDeEstudos[$linha][$coluna]?> </b></i></p>
    <?php
        }
    }
    ?>

    <hr>

    <h3>Exemplo com FOREACH aninhado:</h2>
    <?php
    foreach($planoDeEstudos as $linha){
        foreach ($linha as $coluna){
    ?>
    <p><i><b> <?=$coluna?> </b></i></p>
    <?php
        }
    }
    ?>

    <hr>

    <h2>Loop com Matriz Associativa</h2>
    <?php
        $clientes = [
            [
              "nome" => "Tanaka",
              "idade" => "21"
            ],

            [
              "nome" => "Cleiton",
              "idade" => "16"
            ],

            [
              "nome" => "Marcos",
              "idade" => "65"  

            ]
        ];
        
        foreach($clientes as $cliente){
    ?>

    <p><b>Nome: </b><?=$cliente["nome"]?></p>
    <p><b>Idade: </b><?=$cliente["idade"]?></p>
    <hr>

    <?php
    }

    /* Lembrete sobre sintaxe de estruturas de controle (condicionais e loops).

    Exemplo passando as chaves:
    if(){
    } else {   
    }
    ----------------------------------------------------------------------
    Exemplo usando o "endif":
    if():
    else:
    endif;       
    ----------------------------------------------------------------------
    */

    ?>
</html>