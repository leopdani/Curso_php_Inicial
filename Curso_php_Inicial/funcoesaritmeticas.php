<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <?php
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h2> valores recebidos: $v1 e $v2 </h2>";
            echo "o valor absoluto de $v2 e " . abs($v2);
            echo "<br/>o valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
            echo "<br/> a raiz de $v1 e" .sqrt($v1);
            echo "<br/> o valor de $v2 arredondado é " . round($v2);
            echo "<br/> a parte inteira de $v2 e" . intval($v2);
            echo "<br/>o valor de $v1 em moeda é" .number_format($v1, 2, ",", ".");
        ?>
</div>
    
</body>
</html>