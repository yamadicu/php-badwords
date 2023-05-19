<?php 
$dato = $_POST['datoInserito'];
$censura= $_POST['Censura'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>
        <?php
        echo str_replace($censura, '***', $dato);
        echo "la parola è lunga: " . strlen($censura)
        ?>
    </span>
</body>
</html>