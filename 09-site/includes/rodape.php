</main>
    <?php
        $data = date ("d/m/Y");
        date_default_timezone_set("America/Sao_Paulo");
        $hora = date("H:i:s");
    ?>

    <footer>
        <p>Site criado para o curso <b>Téc. Informática para Internet</b> <b><?=$data?></b> <b><?=$hora?></b> </p>
    </footer>
</body>
</html>