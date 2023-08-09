<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cadastro de Produtos com formulário</title>

</head>

<body>

   <h1>Cadastro de Produtos</h1>

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

    <?php
        $fabricantes = [
        "LG", "Samsung", "Apple", "Philco"
    ];     
    ?>

    <div>
        <label for="fabricante">Fabricante:</label>
        <select name="fabricante">
        <option></option>
    <?php
        foreach($fabricantes as $fabricante) {
    ?>        
        <option> <?=$fabricante?> </option>
    <?php   
    }
    ?>
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