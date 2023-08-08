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
    // Confirmando se os campos do form estão vazios.
    // || - Pipe (Or/Ou)
    if (empty($_POST["nome"]) || empty($_POST["email"])) {
    ?>
    <p style="color: red;">Você deve preencher nome e e-mail!</p>
    <p><a href=10-formulario.html>Voltar</a></p>
    
    <?php
    } else {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
        $idade = $_POST["idade"]; 
        $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
    
        <!-- Usando o "!"(Não), para inverter a logica do empty()  -->
        <?php if(!empty($mensagem)){ ?>
            <li>Mensagem: <?=$mensagem?></li>
        <?php }?>

        <li>Idade: <?=$idade?></li> 
        
        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST")
        if(isset($_POST["check_box"])) { ?>
            <li>interesses: <?=implode("," ,$interesses)?></li>
        <?php } ?>

    </ul>
    <p><a href=10-formulario.html>Voltar</a></p>

    <?php
    }
    ?>
</body>
</html>