</main>
    <?php
        $dataHoraAtual = date ("d/m/Y");
        date_default_timezone_set("America/Sao_Paulo");
        $hora = date("H:i");
    ?>

    <footer>
        <p>Site criado para o curso <b>Téc. Informática para Internet</b> - <time><b><?=$dataHoraAtual?></b></time> <time><b><?=$hora?></b></time> </p>
    </footer>
</body>
</html>