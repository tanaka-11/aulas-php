<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Exercicio 04 - Tanaka</title>

<style>
h1 {text-align: center;}

body {background-color: lightgrey;}

table, th, td {
    border: black solid 5px;
    border-collapse: collapse;
    
}

table {
    margin: auto;
    width: 90%;
    max-width: 675px;
}

th {
    background-color: black;
    color: white;
    padding: 1rem;
    text-transform: uppercase;
    
}

td {
    padding: 12px;
    font-size: 1.2rem;
    font-weight: bold;
}


td:first-child,td:nth-child(2) { text-align: center;}

/* Linhas (even) */
tr:nth-child(even) {background-color: #6495ED;}
tr:nth-child(even):hover {
    background-color: #4F5BD6;
    cursor: pointer;
}

/* Linhas (odd) */
tr:nth-child(odd) {background-color: #E6E6FA;}
tr:nth-child(odd):hover {
    background-color: #808080;
    cursor: pointer;
}
</style>

</head>

<body>
    <h1>Linguagens de Programação e Descrições</h1>

    <table>
        <tr>
            <th>#</th>
            <th>Linguagem</th>
            <th>Descrição</th>
        </tr>
    
    <?php
        $linguagens = [
// Chave Associativa => Valor
            "HTML" => "Estruturação",
            "CSS" => "Estilização",
            "JS" => "Comportamentos",
            "PHP" => "Back-End",
            "SQL" => "Banco de dados",
            "Java" => "Softwares"
        ];

        $contador = 1;

        foreach ($linguagens as $linguagem => $descricao) {
    ?>

    <tr>
    <td><?=$contador?></td>
    <td><?=$linguagem?></td>
    <td><?=$descricao?></td>
    </tr>
                
    <?php
        $contador++;        
    }
    ?>
    </table>
</body>
</html>