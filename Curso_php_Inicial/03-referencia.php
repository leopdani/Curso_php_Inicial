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
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "a variavel A vale $a";
        echo "<br/> a variavel b vale $b";
        
    ?>
    
</body>
</html>