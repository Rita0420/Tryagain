<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迴圈</title>
</head>
<body>
<h2>使用for迴圈來產生以下的數列</h2>

<ul>
<li>1,3,5,7,9……n</li>
<li>10,20,30,40,50,60……n</li>
<li>3,5,7,11,13,17……97</li>
</ul>

<?php
for($i=1;$i<10;$i=$i+2){
    echo $i.",";
}
echo "<br>";

for($i=10;$i<100;$i=$i+10){
    echo $i.",";
}

echo "<br>";

for($i=3;$i<100;$i=$i+2){  //因為質數不可能為偶數所以從3開始加2,先把奇數篩選出來
    $test=true; //設值為真(奇數）才能被叫出來
for($j=2;$j<$i;$j=$j+1){  //因為質數定義只能被自己跟1整除,所以從2開始一個一個數字去除看看
    if($i%$j==0){  //假如可以被整除那就不是質數就能直接排除,剩下的即為要的
        $test=false;
        break;
    }
}
if($test){
    echo $i.",";
}
}
?>

<h2>九九乘法表</h2>
<table border=1>
    <?php
    for($i=1;$i<=9;$i++){
        echo"<tr>";
        for($j=1;$j<=9;$j++){
            echo "<td>$j x $i =".($i*$j)."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<br>
<h2>交叉九九乘法表</h2>
<table border=1>
    <tr>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
    </tr>
    <?php
    for($i=1;$i<=9;$i++){
        echo"<tr>";
        echo"<td>$i</td>";
        for($j=1;$j<=9;$j++){
            echo "<td>".($i*$j)."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>