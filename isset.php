<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset()</title>
</head>

<body>
    <?php
    $variavel = "valor";
    if (isset($variavel)) {
        echo "A variável foi definida";
    } else {
        echo "A variável não foi definida";
    }

    echo "<br/>";

    // 1 2 3 7 8 9
    
    unset($variavel);
    if (isset($variavel)) {
        echo "A variável foi definida";
    } else {
        echo "A variável não foi definida";
    }
    ?>
</body>

</html>