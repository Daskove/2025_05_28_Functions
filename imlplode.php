<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>implode()</title>
</head>

<body>
    <?php
    $frutas = ["Maçã", "Banana", "Mamão"];
    $frase = implode(" - ", $frutas);
    echo $frase;
    ?>
</body>

</html>