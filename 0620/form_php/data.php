<?php

// $data = [
//     'inputA' => '10',
//     'math' => '+',
//     'inputB' => '5'
// ];
$data=$_GET;
$inputA = $data['inputA'];
$math = $data['math'];
$inputB = $data['inputB'];

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

        break;
}

echo $result;
