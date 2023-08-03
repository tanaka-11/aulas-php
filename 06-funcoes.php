<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funções no PHP</title>

</head>

<body>
    <h1 style="text-align: center;">Criando e usando funções</h1>
    <hr>
    <h2>Funções com procedimento ou sub-rotina</h2>

    <?php
        function dadosAutor(){
            echo "<div>";
            echo "<p>Marina Tanaka dos Santos Garcia</p>";
            echo "<p> <a href=''>mtanakasg@gmail.com</a> </p>";
            echo "</div>";
        }
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?=dadosAutor()?>

        <article>
            <h4>Outra chamada</h4>
            <?=dadosAutor()?>
        </article>

    </section>

    <h2>Função com retorno de dados (Função)</h2>
    <?php
        function dadosCurso(){
        return "Técnico em Informatica para Internet";
    }    
    ?>
    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministrado no Senac Penha.</p>


</body>

</html>