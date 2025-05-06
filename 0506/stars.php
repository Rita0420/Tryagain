<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>星星畫圖</title>
</head>
<body>
    <h2>三角形</h2>

    <?php
    $stars=5;
    for($i=0;$i<$stars;$i++){
        for($j=0;$j<$stars;$j++){
            if($i>=$j){
                echo"*";
            }
        }
        echo "<br>";
    }

    ?>
    <h2>倒三角形</h2>

<?php
$stars=5;
for($i=0;$i<$stars;$i++){
    for($j=0;$j<$stars;$j++){
        if($i<=$j){
            echo"*";
        }
    }
    echo "<br>";
}

?>

<h2>正三角形</h2>
<?php
$stars=5;
for($i=0;$i<$stars;$i++){
    for($k=0;$k<$stars-1-$i;$k++){
        echo"&nbsp;";
    }
    for($j=0;$j<$i*2+1;$j++){
        echo "*";
    }
    echo"<br>";
}
?>
</body>
</html>