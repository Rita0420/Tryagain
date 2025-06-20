<?php



$data=$_GET;

// $inputA=$data['inputA'];
// $math=$data['math'];
// $inputB=$data['inputB'];
// echo $inputA;
// $data=[
//     $inputA,
//     $math,
//     $inputB
// ];

// switch ($math) {
//     case '+':
//         $result = $inputA + $inputB;
//         break;
//     case '-':
//         $result = $inputA - $inputB;
//         break;
//     case '*':
//         $result = $inputA * $inputB;
//         break;
//     case '/':
//         $result = $inputA / $inputB;
//         break;

//     default:
//         $result = "請輸入＋-*/";
//         break;
// }

function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
// dd($result);
// echo $result;
echo json_encode($data);