<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cadastro de Produtos com formulário</title>

<style>
h1 {
    text-align: center;
    text-shadow: #1081A3 1px 1px 2px;
    color: #FFF;
}
h2 {
    text-shadow: #1081A3 1px 1px 2px;
    color: #FFF;
}

p {
    font-weight: bold;
    font-size: 1.25rem;
}

body {background-color: lightslategray;}

form {
    width: 90%;
    margin: auto;
    padding: 1.25rem;
}

label, div {
    font-size: 1.2rem;
    color: white;
    text-shadow: #2D3945 2px 2px 5px;
}

input:not([type=radio], [type=checkbox]), select, textarea {
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

   <h1>Cadastro de Produtos</h1>
    <hr>
    <?php
        $fabricantes = ["LG", "Samsung", "Apple", "Philco"];     
    ?>

    <?php
    if (isset($_POST["enviar"])) {
        $nomeProduto = filter_input(INPUT_POST, "nomeProduto", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $fabricante =  filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_INT);

        $disponibilidade = $_POST["disponibilidade"];

        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
    ?>

    <h2>Dados cadastrados: </h2>
    <p>Produto: <?=$nomeProduto?></p>
    <p>Fabricante: <?=$fabricante?></p>
    <p>Preço: <?=$preco?></p>
    <p>Disponibilidade: <?=$disponibilidade?></p>
    <p>Descrição do produto: <?=$descricao?></p>

    <?php } else { ?>
    <form action="#" method="post">
    
    <p>
        <label for="nomeProduto">Nome do Produto:</label>
        <input type="text" name="nomeProduto" id="nomeProduto" required>
    </p>


    <div>
        <label for="fabricante">Fabricante:</label>
        <select name="fabricante">
        <option></option>
        
    <?php foreach($fabricantes as $fabricante) { ?>        
        <option> <?=$fabricante?> </option>
    <?php } ?>
        </select>
    </div>
    
    <p>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" min="100" max="10000" step=".01" required>
    </p>

    <div>
        <p>Produto em disponibilidade?</p>          
        <input type="radio" name="disponibilidade" id="sim" value="Sim">
        <label for="sim">Sim</label>
                 
        <input type="radio" name="disponibilidade" id="nao" value="Não">
        <label for="nao">Não</label>
    </div>

    <p>
        <label for="descricao">Descrição do Produto:</label> 
        <br>
        <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
    </p>

    <br>

    <button type="submit" name="enviar" id="enviar">Enviar</button>
    </form>
    <?php } ?>   
</body>

</html>