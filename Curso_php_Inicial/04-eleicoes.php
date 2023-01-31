<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2014 - $ano;
    echo "quem nasceu em $ano tem $idade anos. "; 
    $tipo = ($idade>=18 && $idade<65)?"obrigadotio":"nao obrigatorio";
    echo "e dessa forma seu voto e $tipo";

    ?>
    
</body>
</html>