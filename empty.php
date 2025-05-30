<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empty()</title>
</head>

<body>
    <?php
    $string = "";
    if (empty($string)) {
        echo "A string está vazia";
    } else {
        echo "O valor da string é: " . $string;
    }
    ?>
</body>

</html>