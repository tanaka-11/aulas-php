<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Tanaka</title>

    <style>
        /* Definindo o fundo diretamente com PHP */
        <?php $corFundo = "lightblue"; ?>

        body {
            background-color: <?=$corFundo?>;
            color: darkblue;

            font-size: 2rem;
            text-align: center;
        }

        h1 {
            font-size: 4rem;
        }
        h1:hover {
            color: blue;
        }

        p {
            background-color: white;
            border-radius: 25px;
        }

        .destaque {
            color: darkblue;
        }
        .destaque:hover {
            color: red;
            cursor: pointer;
        }

    </style>

</head>

<body>
    <h1>Média de Faltas</h1>
    
    <?php
        // Y em maiúsculo para pegar os 4 dígitos do ano no date:
        $data = date ("d/m/Y");

        // Definindo fuso horario (timezone_set)
        date_default_timezone_set("America/Sao_Paulo");
        $hora = date("H:i:s");

        $nome = "Marina Tanaka";
        $curso = "TI para Internet";
        $cargaHoraria = 20;
        $limitedeFaltas = $cargaHoraria / 4;
    ?>

    <p>Me chamo <b class="destaque"> <?=$nome?> </b>, faço o curso de <b class="destaque"> <?=$curso?> </b>, na data de <b class="destaque"> <?=$data?> </b> </b> com carga horaria de <b class="destaque"> <?=$cargaHoraria?> </b> horas e <b class="destaque"> <?=$limitedeFaltas?> </b> faltas.</p>

    <?php
        $teste = "Extensão PHP Intelephense";
        echo $teste;
        echo "<br>";
        echo "<b class='destaque'>Hora: $hora</b>";
    ?>

</body>

</html>