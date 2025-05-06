<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生成績</title>
</head>
<body>
    <h1>判斷成績是否合格</h1>
    <?php
    $score=46;
    // !相反的意思
    // is_numeric()是自然數
    // ＆＆and
    if(!(is_numeric($score) && $score>=0 && $score<=100)){
        echo "請輸入正確的數字";
        // 要exit不然會繼續接下來的程式
        exit();
    }
    if($score<60){
        echo "不合格";
    }else{
        echo "合格";
    }

    ?>
    <h1>給評語</h1>
    <?php
    $level="";
    if($score>=0 && $score<60){
        $level="E";
    }else if($score>=60 && $score<70){
        $level="D";
    }else if($score>=70 && $score<80){
        $level="C";
    }else if($score>=80 && $score<90){
        $level="B";
    }else if($score>=90 && $score<101){
        $level="A";
    }
    echo "<br>";
    echo "$level";
    echo "<br>";

    switch($level){
        case"A":
            echo "超棒棒棒棒";
        break;
        case"B":
            echo "棒棒棒棒";
        break;
        case"C":
            echo "棒";
        break;
        case"D":
            echo "小心";
        break;
        case"E":
            echo "在混？";
        break;
    }

    ?>

<h2>閏年判斷，給定一個西元年份，判斷是否為閏年</h2>
<ul>
<li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
<li>公元年分除以4不可整除，為平年。</li>
<li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
<li>公元年分除以100可整除但除以400不可整除，為平年。</li>
</ul>

<?php
$year=2000;

// if($year%4==0){
//     echo "閏年";
// }
// if($year%4==0 && $year%100 !=0){
//     echo "閏年";
// }
// if($year%100 ==0 && $year%400！=0){
//     echo "平年";
// }換言之＄year%100 !=0 || $year%400==0就是閏年

if(($year % 4 == 0 && $year % 100 !=0 )||( $year % 400 == 0)){
    echo "閏年";
}else{
    echo "平年";
}
?>

</body>
</html>