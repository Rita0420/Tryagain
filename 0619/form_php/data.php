<?php



$data=$_GET;

$inputA=$data['inputA'];
$math=$data['math'];
$inputB=$data['inputB'];
// echo $inputA;
// $data=[
//     $inputA,
//     $math,
//     $inputB
// ];

$result=0;
switch ($math) {
    case '+':
        $result = $inputA + $inputB;
        break;
    case '-':
        $result = $inputA - $inputB;
        break;
    case '*':
        $result = $inputA * $inputB;
        break;
    case '/':
        $result = $inputA / $inputB;
        break;

    default:
        $result = "請輸入＋-*/";
        exit;
}
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
// dd($result);