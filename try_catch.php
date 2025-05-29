<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
    
    define("texto","texto");
    try{
        if(define("texto","TEXTO")){
            echo"Constante alterada com sucesso";

    }else{
        throw new Exception(message:"Variavel do tipo constante não pode ser alterada com sucesso!");
    }
}catch(Exception $e){
    echo "Erro ".$e;
}
    ?>

</body>

</html>