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
    <hr>
    
    <h2>Númericas</h2>
    
    <hr>

    <h2>Arrays</h2>
    
    <hr>

    <h2>Filtros</h2>
    
    <hr>

    <h2>Segurança</h2>
    

</body>
</html>