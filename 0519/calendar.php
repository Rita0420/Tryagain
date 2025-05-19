<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .box-container{
            width: 350px;
            margin: auto;
        }
        .box{
            width: 50px;
            height: 50px;
            border: 1px solid black;
            margin-top: -1px;
            margin-left: -1px;
            display: inline-block;
        }
        .weekend{
            background-color: red;
            display: inline-block;
        }
        .birthday{
            color:green;
            display: inline-block;
        }
    </style>
</head>
<body>
<?php
$month=date("m");
$Firstday=date("Y-$month-01");
$monthDays=date("t",strtotime($Firstday));
$firstWeek=date("w",strtotime($Firstday));


$spDate=[
    '2025-01-13' => '玟生日',
    '2025-02-19' => '二姐生日',
    '2025-03-04' => '包子生日',
    '2025-03-15' => '大姊生日',
    '2025-04-20' => '妤生日',
    '2025-05-12' => '好累',
    '2025-08-27' => '交往紀念日',
    '2025-10-17' => '喆生日',
    '2025-11-17' => '貝生日',
];

$monthday[]=[];

for($i=0;$i<$firstWeek;$i++){
    $monthday[]=[];
}

for($i=0;$i<$monthDays;$i++){
    $timestamp=strtotime("$i days",strtotime($Firstday));
    $date=date("d",$timestamp);
    $datestr=date("Y-m-d",$timestamp);//轉回變字串
    $weekend=date('N',$timestamp)>5?true:false;
    $birthday='';
    foreach($spDate as $d => $value){
        if($d == $datestr){
            $birthday=$value;
        }
    }
    $monthday[] = [
        "day"=>date("d",$timestamp),
        "weekend"=>$weekend,
        "birthday"=>$birthday,
    ];
}
print_r($monthday);

echo "<div class='box-container'>";
     
echo "<div class='th-box'>日</div>";
echo "<div class='th-box'>一</div>";
echo "<div class='th-box'>二</div>";
echo "<div class='th-box'>三</div>";
echo "<div class='th-box'>四</div>";
echo "<div class='th-box'>五</div>";
echo "<div class='th-box'>六</div>";

foreach($monthday as $date){
    echo "<div class='box'>";
    echo "<div class='day-info'>";
        echo "<div class='day-num'>";
        if(isset($day['day'])){
            echo $day["day"];
        }else{
            echo "&nbsp";
        }
        echo "</div>";
    
    // echo "<div class='weekend-info'>";
    // if(isset($day['weekend'])){
    //     echo "<div class='weekend'>";
    //     echo $day['weekend'];
    //     echo "</div>";
    // }
    if(isset($day['birthday'])){
            echo "<div class='birthday'>";
            echo $day['birthday'];
            echo "</div>";
        }
    
    echo "</div>";

}
echo "</div>"


?>
</body>
</html>