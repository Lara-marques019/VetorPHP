<?php
// cria um vetor com 5 números aleatórios entre 0 e 99
$numeros = array();
for ($i = 0;  $i < 5; $i++) {
    $numeros[] = rand(0, 99);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Números Gerados</title>
</head>
<body>
    <h1>Números Aleatórios Gerados:</h1>
    <ul>
        <?php
        foreach ($numeros as $num) {
            echo "<li>$num</li>";
        }
        ?>
    </ul>
    <a href="1index.php">Gerar Novos Números</a>
</body>
</html>