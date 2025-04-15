<?php
if (!isset($_POST['sexo'])) {
    header("Location: 3index.php");
    exit;
}

$sexo = $_POST['sexo'];

// Vetor de frases para homens
$sortesHomem = [
    "Hoje é um ótimo dia para conquistar seus objetivos.",
    "A confiança será sua maior aliada hoje.",
    "Você terá boas surpresas vindo de onde menos espera.",
    "A sorte está do seu lado, aproveite oportunidades.",
    "Alguém vai te admirar por sua coragem hoje."
];

// Vetor de frases para mulheres
$sortesMulher = [
    "Hoje é o dia perfeito para brilhar.",
    "Sua intuição vai te guiar para algo incrível.",
    "Um momento especial está te esperando.",
    "A sorte caminha ao seu lado com delicadeza.",
    "Você vai inspirar alguém com seu sorriso hoje."
];

// Escolhe uma frase aleatória com base no sexo
if ($sexo === 'homem') {
    $frase = $sortesHomem[array_rand($sortesHomem)];
} else {
    $frase = $sortesMulher[array_rand($sortesMulher)];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sua Sorte</title>
</head>
<body>
    <h1>Sua sorte do dia:</h1>
    <p><strong><?php echo $frase; ?></strong></p>

    <br>
    <form action="3index.php" method="get">
        <input type="submit" value="Tentar outra sorte">
    </form>
</body>
</html>
