<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>月曆</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 350px;
            margin: auto;
            margin-top: 30vh;
        }
        .box {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 1px solid black;
            text-align: center;
            vertical-align: top;
            padding: 2px;
            font-size: 12px;
            overflow: hidden;
        }
        .weekend {
            background-color: red;
            color: white;
        }
        .birthday {
            background-color: greenyellow;
            font-weight: bold;
        }
        .empty {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 1px solid transparent;
        }
        .day-number {
            font-size: 14px;
            font-weight: bold;
        }
        .label {
            font-size: 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

<?php
$month = date("m");
$year = date("Y");

$today = date("Y-$month-d");
$monthFirstDay = date("Y-$month-01");
$monthDay = date("t", strtotime($today));
$monthFirstWeek = date("w", strtotime($monthFirstDay)); // 星期天是0

$spDate = [
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

$monthDays = [];

// 空格填入
for ($i = 0; $i < $monthFirstWeek; $i++) {
    $monthDays[] = [];
}

// 實際日期
for ($i = 0; $i < $monthDay; $i++) {
    $timestamp = strtotime("+$i days", strtotime($monthFirstDay));
    $dateStr = date("Y-m-d", $timestamp);
    $birthday = $spDate[$dateStr] ?? '';
    $isWeekend = date("N", $timestamp) >= 6;

    $monthDays[] = [
        "day" => date("d", $timestamp),
        "weekend" => $isWeekend,
        "birthday" => $birthday,
    ];
}

// 顯示
echo "<div class='container'>";
echo "<div class='box'>日</div>";
echo "<div class='box'>一</div>";
echo "<div class='box'>二</div>";
echo "<div class='box'>三</div>";
echo "<div class='box'>四</div>";
echo "<div class='box'>五</div>";
echo "<div class='box'>六</div>";

foreach ($monthDays as $date) {
    if (!isset($date["day"])) {
        echo "<div class='empty'></div>";
        continue;
    }

    $class = "box";
    if (!empty($date["birthday"])) {
        $class .= " birthday";
    } else if ($date["weekend"]) {
        $class .= " weekend";
    }

    echo "<div class='$class'>";
    echo "<div class='day-number'>{$date["day"]}</div>";
    if (!empty($date["birthday"])) {
        echo "<div class='label'>{$date["birthday"]}</div>";
    }
    echo "</div>";
}

echo "</div>";
?>

</body>
</html>
