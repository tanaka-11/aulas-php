<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 3 - Tanaka</title>

    <style>
        h1 {
            background-color: gray;
            color: darkblue;
            text-align: center;
            font-size: 35px;
        }

        .container {
            background-color: lightgray;
            font-size: 26px;
            color: darkblue;  
        }

        .espacamento {
            width: 750px;
            margin: auto;
            padding: 20px;
        }

        /* Animação:  */
        .anima {
            animation-name: cor;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }
    
        @keyframes cor {
            from {color: orange;}
            to {color: red;}
        }
    </style>

</head>

<body>
<div class="espacamento">
  <article class="container">
    <h1>---Sistema---</h1>

    <?php
        $salario = 4000.75;
    
        if ($salario < 1500) {
        $novoSalario = $salario * 1.15;
    }
        elseif ($salario <= 3000) {
        $novoSalario = $salario * 1.10;
    }
        else {
            $novoSalario = $salario * 1.05;
        }
        
    $salario = number_format($salario,2,",",".");
    $novoSalario = number_format($novoSalario,2,",",".");
    ?> 

   <p>O funcionario(a) ganhava <b class="anima">R$ <?=$salario?></b> e agora vai receber <b class="anima">R$ <?=$novoSalario?></b></p>
      
  </article>
</div>
</body>

</html>