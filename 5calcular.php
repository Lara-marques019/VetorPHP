<?php
// Vetor com cores e frases associadas
$cores = [
    "Azul" => "Tranquilidade e confiança definem o azul.",
    "Vermelho" => "Paixão, energia e intensidade estão no vermelho.",
    "Verde" => "Verde transmite esperança e renovação.",
    "Amarelo" => "Alegria, otimismo e luz vêm do amarelo.",
    "Roxo" => "Misterioso e espiritual, o roxo inspira reflexão."
];

// Sorteia uma cor
$corSorteada = array_rand($cores);
$frase = $cores[$corSorteada];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cor Sorteada</title>
</head>
<body>
    <h1>Cor sorteada: <span style="color:<?php echo strtolower($corSorteada); ?>"><?php echo $corSorteada; ?></span></h1>
    <p><strong><?php echo $frase; ?></strong></p>

    <br>
    <form action="5index.php" method="get">
        <input type="submit" value="Sortear novamente">
    </form>
</body>
</html>
