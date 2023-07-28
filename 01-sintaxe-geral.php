<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sintaxe Geral</title>

    <style>
       p {font-family: "Verdana";}
       .destaque {text-transform: uppercase;}
    </style> 

</head>

<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <hr>

    <!--  Iniciando o PHP dentro do HTML -->
    <?php
        // Geração de texto (string)
        echo "São Paulo FC";

        // Texto com classe HTML
        echo "<p class='destaque'>São Paulo FC</p>";

        echo "<p> <span class='destaque'>São Paulo</span> FC</p>";

        // Geração de texto estruturado (com tags)
        echo "<h2> Gerando HTML através do PHP </h2>"; 

        // CSS Inline
        // Duas barras invertidas
        echo "<p style=\"color:red\"> Testando cores.</p>";

        // Aspas unicas
        echo "<p style='color:orange'> Testando cores. </p>";

        // Substituindo as aspas duplas pela aspa unica
        echo '<p style="color:blue"> Testando cores. </p>';
    ?>

    <!-- JavaScript via PHP --> 
    <script>
        let destaque = document.querySelector("p.destaque");
        console.log(destaque);
    </script>   

</body>
</html>