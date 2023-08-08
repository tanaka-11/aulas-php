</main>
    <?php
        $dataHoraAtual = date ("d/m/Y");
        $hora = date("H:i");
        date_default_timezone_set("America/Sao_Paulo");
    ?>

    <footer>
        <p>Site criado para o curso <b>Téc. Informática para Internet</b> - <time><b><?=$dataHoraAtual?></b></time> <time><b><?=$hora?></b></time> </p>
    </footer>
</body>
</html>