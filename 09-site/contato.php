<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo getPageTitle(); ?></title>
</head>

<body>
    <!-- Conteúdo da página de contato -->
    <footer>
        <?php echo "Data e hora atual: " . getCurrentDateTime(); ?>
    </footer>
</body>

</html>

<?php
// Função para obter a data e hora atual formatada
function getCurrentDateTime()
{
    date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário para o Brasil
    return date('d/m/Y H:i:s');
}

// Função para obter o título da página atual
function getPageTitle()
{
    $currentPage = basename($_SERVER['PHP_SELF']);
    switch ($currentPage) {
        case 'index.php':
            return 'Página Inicial - Site PHP';
        case 'cursos.php':
            return 'Cursos - Site PHP';
        case 'duvidas.php':
            return 'Dúvidas - Site PHP';
        case 'contato.php':
            return 'Contato - Site PHP';
        default:
            return 'Site PHP';
    }
}
?>
