<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funções no PHP</title>

</head>

<body>
    <h1 style="text-align: center;">Criando e usando funções</h1>
    <hr>
    <h2>Funções com procedimento ou sub-rotina</h2>

    <?php
        function dadosAutor(){
            echo "<div>";
            echo "<p>Marina Tanaka dos Santos Garcia</p>";
            echo "<p> <a href=''>mtanakasg@gmail.com</a> </p>";
            echo "</div>";
        }
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?=dadosAutor()?>

        <article>
            <h4>Outra chamada</h4>
            <?=dadosAutor()?>
        </article>

    </section>

    <h2>Função com retorno de dados (Função)</h2>
    <?php
        function dadosCurso(){
        return "Técnico em Informatica para Internet";
    }    
    ?>
    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministrado no Senac Penha.</p>

    <hr>

    <h2>Função com parâmetros (ou argumentos)</h2>
    <?php
        function soma($valor1, $valor2, $valor3){
        //$total = Variável de escopo local dentro da função.
            $total = $valor1 + $valor2 + $valor3;
            return $total;
        }
    ?>
    <!-- Chamando e exibindo diretamente o retorno -->
    <p>Resultado 1: <?=soma(10,20,5)?></p>
    <p>Resultado 2: <?=soma(23,85,45.5)?></p>
    
    <?php
    // Chamando e guardando o retorno
        $resultado3 = soma(500,480,700);
    ?>
    <p>Resultado 3: <?=$resultado3?></p>

    <?php
        if($resultado3 > 100){
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
    <?php
    }
    ?>

<!-- Usando uma função como parte de uma condição -->
    <?php if (soma (2,3,10) >= 10) { ?>
        <p>Lorem, ipsum dolor sit.</p>
    <?php } ?> 
    
    <h3>Função com parâmetros opcionais</h3>

    <!-- $pessoa é um parâmetro opcional com um valor padrão de = "convidado(a)".  -->
    <?php 
        function saudacao($mensagem, $pessoa = "convidado(a)"){
            return "Olá, $mensagem $pessoa!";
    }        
    ?>
    <p> <?=saudacao("Bom dia", "Tanaka")?> </p>
    <p> <?=saudacao("Boa noite", "Melissa")?> </p>
    <p> <?=saudacao("Boa tarde")?> </p>

    <hr>

    <h2>Indução de tipos de dados</h2>
    <?php
    /* Tipos de dados mais comuns: 
    String -> Caracteres em geral.
    Int -> Número inteiros.
    Float -> Números com casas decimais.
    Array -> Vetor.
    */

    /* Indução de tipos deve ser feita nos parâmetros e no retorno da função.
    Isso ajudará a entrada/saída correta dos dados manipulados pela função, além de melhorar as mensagens de erro quando ocorre algum problema.
    */
    function verificaNegativo(int $valor):string {
        if ($valor < 0){
            return "Valor negativo!";
        } else {
            return "Valor positivo!";
        }
    }
    ?>
    <p>Número <b>10</b>: <?=verificaNegativo(10)?> </p>
    <p>Número <b>-10</b>: <?=verificaNegativo(-10)?> </p>
    <p>Número <b>50</b>: <?=verificaNegativo("texto")?> </p>

</body>

</html>