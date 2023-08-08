<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo _POST - PHP</title>
</head>
<body>
    <h1>Exemplo utilizando o processamento _POST</h1>
    <hr>
    <p>Receber e processar dados via <b>_POST</b></p>
    
    <!-- Capturando dados transmitidos -->
    <?php
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"]; 
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
</body>
</html>