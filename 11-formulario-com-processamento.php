<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulário com processamento PHP</title>

<style>
h1, h2 {
    text-align: center;
    color: #BBC1CD;
    background-color: #2D3945; 
}

p {
    font-size: 1.25rem;
    font-weight: bold;
    color: #2D3945;
    text-shadow: #FFF 1px 1px 5px;
}

body {
    background-color: lightslategray;
}

form {
    width: 90%;
    margin: auto;
    padding: 1rem;
}

label {
    font-size: 1.2rem;
    color: white;
    text-shadow: #2D3945 2px 2px 5px;
}

input:not([type=checkbox]), textarea {
    border: none;
    padding: 8px;
    width: 100%;
    box-shadow:#2D3945 2px 2px 10px;
    height: 40px;
    font-size: 1.2rem;
    background-color: lightgrey;
}

button {
    border: none;
    padding: 1rem;
    background-color: #1081A3;
    color: white;
    font-weight: bold;
    border-radius: 8px;
    width: 100%;
    margin: auto;
}
button:hover, button:focus {
    cursor: pointer;
    background-color: #BBC1CD;
    color: #1081A3;
}

</style>

</head>
<body>
    <h1>Formulário e processamento</h1>
    <hr>

    <!-- Se o botão for acionado(isset) siginifica que o form foi enviado -->
    <?php
        if (isset($_POST["enviar"])) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
                
    ?>

    <h2>Dados processados: </h2>
    <p>Nome: <?=$nome?></p>
    <p>Email: <?=$email?></p>
    
    <?php
    } else {
    ?>

    <!-- Utilizar o action para direcionar para outra página, como vamos fazer a programação diretamente pela página não irá precisar! --> 
    <form action="" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="name" required>
        </p>

        <br>

        <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
    <?php
    }
    ?>
    

</body>
</html>