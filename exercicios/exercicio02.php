<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 02 - Tanaka</title>
    
    <style>
        body {background-color: lightblue;}

        h1 {
            font-size: 2rem;
            text-align: center;
            
            color: darkblue;
            text-shadow: 3px 3px 2px cornflowerblue;
        }

        h2 {
            font-size: 1.7rem;
            text-align: center;
        }

        .container{
            font-size: 1.5rem;

            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .usuarios {
            margin: 10px;
            background-color: lightgray;
            color: darkblue;

            border-radius: 25px;
            border: 1px darkblue solid;
            box-shadow: 3px 3px 10px darkblue;
        }

        ul {list-style: none;}
       
    </style>

</head>

<body>
    <h1> ------------------Sistema------------------ </h1>

    <?php
        // Array Numerico:
        $usuario1 = ["Cleiton","b@gmail.com","222",19,"M","RJ"];

        $usuario2 = ["Tanaka","a@gmail.com","111",21,"F","SP"];

        // Exemplo Array Associativo:
        // $tanaka = [
        //  "usuario" => "Tanaka",
        //  "email" => "Tanaka@gmail.com",
        // ]
    ?>

<article class="usuarios">
    <h2>Informações dos Usúarios:</h2>

    <div class="container">
        <ul>
            <li><b>Usuário:</b> <?=$usuario1[0]?></li>
            <li><b>Email:</b> <?=$usuario1[1]?></li>
            <li><b>Idade:</b> <?=$usuario1[3]?></li>
            <li><b>Sexo:</b> <?=$usuario1[4]?></li>
        </ul>
    
        <ul>
            <li><b>Usuário:</b> <?=$usuario2[0]?></li>
            <li><b>Email:</b> <?=$usuario2[1]?></li>
            <li><b>Idade:</b> <?=$usuario2[3]?></li>
            <li><b>Sexo:</b> <?=$usuario2[4]?></li>
        </ul>        
    <div>
</article>

</body>

</html>