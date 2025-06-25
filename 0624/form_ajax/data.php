<?php
$data=$_GET;

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

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

$data['result']=$result;


echo json_encode($data);