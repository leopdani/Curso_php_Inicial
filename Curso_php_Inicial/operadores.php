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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2> valores recebidos: $n1 e $n2 </h2>";
        $m = ($n1 + $n2) / 2;
        echo "a soma vale ". ($n1+$n2);
        echo "</br>a subtração vale ". ($n1-$n2);
        echo "</br>a soma multipli ". ($n1*$n2);
        echo "</br>a divisão vale ". ($n1/$n2);
        echo "</br>o modulo vale ". ($n1%$n2);

        echo "</br>a media vale $m";

    ?>
    
</body>
</html>