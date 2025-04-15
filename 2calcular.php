<?php
session_start();

// Se o número inicial foi enviado do index.php
if (isset($_POST['numero'])) {
    $limite = (int)$_POST['numero'];

    // Inicializa sessões
    $_SESSION['limite'] = $limite;
    $_SESSION['valores'] = [];
} elseif (isset($_SESSION['limite'])) {
    $limite = $_SESSION['limite'];
} else {
    // Caso acesse sem passar pelo index
    header("Location: index.php");
    exit;
}

// Gera novo valor aleatório
$novoValor = rand(0, $limite);
$_SESSION['valores'][] = $novoValor;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Valor gerado: <strong><?php echo $novoValor; ?></strong></h1>

    <h2>Todos os valores gerados:</h2>
    <ul>
        <?php foreach ($_SESSION['valores'] as $valor): ?>
            <li><?php echo $valor; ?></li>
        <?php endforeach; ?>
    </ul>

    <form method="post" action="2calcular.php">
        <input type="submit" value="Gerar novo número">
    </form>

    <form method="get" action="2index.php">
        <input type="submit" value="Reiniciar">
    </form>
</body>
</html>
