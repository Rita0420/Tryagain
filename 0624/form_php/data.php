<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data=$_GET;
// dd($data);

$Avalue=(int)$data['inputA'];
$Bvalue=(int)$data['inputB'];
$opt=$data['opt'];
// echo $Avalue;
// echo $opt;
// echo $Bvalue;
switch ($opt) {
    case '+':
        $result = $Avalue + $Bvalue;
        break;

        case '-':
        $result = $Avalue - $Bvalue;
        break;

        case '*':
        $result = $Avalue * $Bvalue;
        break;

        case '/':
        $result = $Avalue / $Bvalue;
        break;

    default:
        $result="請輸入+-*/";
        break;
}
