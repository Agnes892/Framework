<?php
include '../app/libraries/Rota.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRAMEWORK</title>
</head>
<body>
    <?php
    $rotas = new Rota();
    $rotas->url();
    ?>
</body>
</html>
