<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_replace()</title>
</head>
<body>
<?php
$original = "eu amo PHP!";
$novo_texto = str_replace("PHP", "Javascript", $original);
echo $novo_texto;
echo "<br/>";
echo $original;
?>
</body>
</html>