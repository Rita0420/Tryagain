<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>交換兩個變數的值</title>
</head>
<body>
    <h3>給定兩個變數，請思考如何交換兩個變數的值</h3>
    <?php
    $a=10;
    $b=50;
    echo "此時的a是"."$a";
    echo "<br>";
    echo "此時的b是"."$b";
    echo "<br>";

    $c=$a;
    $a=$b;
    $b=$c;
    echo "$ c=$ a;多設一個變數c,讓a的值存在c<br>$ a=$ b;接著讓a得到b的值<br>$ b=$ c;最後再把原本存好的a值代入b";

    echo "<br>";    
    echo "此時的a是"."$a";
    echo "<br>";
    echo "此時的b是"."$b";



    ?>
    
</body>
</html>