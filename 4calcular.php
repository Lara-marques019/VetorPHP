<?php
if (!isset($_POST['time'])) {
    header("Location: 4index.php");
    exit;
}

$time = $_POST['time'];

// Vetores com frases de incentivo por time
$frases = [
    'palmeiras' => [
        "Avanti, Verdão! A vitória é certa!",
        "Com raça e coração, o Palmeiras vence!",
        "O porco nunca recua, ele avança!",
        "Hoje é dia de mostrar quem manda, Palmeiras!",
        "O verde da esperança é também o da vitória!"
    ],
    'corinthians' => [
        "Vai, Corinthians! Ninguém segura o Timão!",
        "Com garra e paixão, o Corinthians entra em campo!",
        "Aqui é Corinthians, com sangue no olho!",
        "A fiel sempre acredita, a vitória é certa!",
        "O bando de loucos vai conquistar mais uma!"
    ],
    'saopaulo' => [
        "Vamos, Tricolor! O Morumbi te apoia!",
        "São Paulo é gigante, e gigante nunca cai!",
        "A força da camisa tricolor é imbatível!",
        "Hoje é dia de vitória, São Paulo!",
        "Tricolor guerreiro, sempre rumo ao topo!"
    ],
    'santos' => [
        "Vai pra cima deles, Peixe!",
        "Santos, o time da técnica e da tradição!",
        "O alvinegro praiano vai brilhar mais uma vez!",
        "Hoje tem show na Vila, vai Santos!",
        "Com o DNA ofensivo, o Peixe vai vencer!"
    ]
];

// Verifica se o time é válido
if (!array_key_exists($time, $frases)) {
    echo "Time inválido!";
    exit;
}

// Sorteia uma frase
$fraseEscolhida = $frases[$time][array_rand($frases[$time])];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Frase do Time</title>
</head>
<body>
    <h1>Frase para o torcedor do 
        <?php echo ucfirst($time); ?>:</h1>

    <p><strong><?php echo $fraseEscolhida; ?></strong></p>

    <br>
    <form action="4index.php" method="get">
        <input type="submit" value="Escolher outro time">
    </form>
</body>
</html>
