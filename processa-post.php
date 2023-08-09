<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Processo _POST - PHP</title>

<style>
h1, p {text-align: center;}
    
p {
    color: white;
    text-shadow: #2D3945 1px 1px 10px;
    background-color: #2D3945;
}
    
p a {color: white;}
    
h2 {
    font-size: 2rem;
    padding-left: 40px;
}
    
body {background-color: lightslategray;}
    
.container {
    color: #1081A3;
    text-shadow: #2D3945 1px 1px 10px;
    background-color: #2D3945;
    width: 90%;
    margin: auto;
}

ul li{
    list-style: none;
    font-size: 1.5rem;

    color: white;
    text-shadow: #2D3945 1px 1px 10px;
    background-color: #2D3945;
}


</style>

</head>
<body>
<div class="container">    
    <h1>Exemplo utilizando o processamento _POST</h1>
    <p>Receber e processar dados via <b>_POST</b></p>
    <hr>
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
        // filter_input() usado para impedir caracteres especiais
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);

        $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);

        $interesses = filter_var_array($_POST["interesses"]  ?? [], FILTER_SANITIZE_SPECIAL_CHARS);

        // Exemplo com ternário e isset:
        // $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];
        ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        
        <!-- Transformando o array em uma string com o implode()-->
        <li>Interesses: <?= implode(", ", $interesses)?></li>

        <!-- Usando o "!"(Não), para inverter a logica do empty()  -->
        <?php if(!empty($mensagem)){ ?>
            <li>Mensagem: <?=$mensagem?></li>
        <?php }?>

    </ul>

    <p><a href=10-formulario.html>Voltar</a></p>
</div>

    <?php
    }
    ?>
</body>
</html>