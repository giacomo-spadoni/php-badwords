<?php

$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$nomecognome = $nome . " " . $cognome;

$nomecognomeinmaiuscolo = ucfirst($nome) . " " . ucfirst($cognome);

$nomecognomelunghezza = strlen($nome) + strlen($cognome)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello! <?php echo $nomecognome; ?></h1>
    <h2>Hello! <?php echo $nomecognomeinmaiuscolo; ?></h2>
    <h2>la stringa è lunga <?php echo $nomecognomelunghezza; ?> caratteri</h2>
</body>
</html>