<?php
// $numbers = $_GET ['numbers'];
// $number = $numbers[1];

// echo date ("Y/m/d", strtotime ("today")). 'の運勢は'. '<br>';
// echo '選ばれた数字は'. $number. '<br>';

// switch ($number) {
//     case '0';
//     print '凶';
//     break;
//     case '1';
//     print '小吉';
//     break;
//     case '2';
//     print '小吉';
//     break;
//     case '3';
//     print '小吉';
//     break;
//     case '4';
//     print '中吉';
//     break;
//     case '5';
//     print '中吉';
//     break;
//     case '6';
//     print '中吉';
//     break;
//     case '7';
//     print '吉';
//     break;
//     case '8';
//     print '吉';
//     break;
//     case '9';
//     print '大吉';
//     break;
// }

// やり直し
$numbers = $_GET ['numbers'];
$number = str_split($numbers);
// var_dump($number);
// echo '<br>';
// echo $number[array_rand($number)]. '<br>';
$value = $number[array_rand($number)];
// echo $value. '<br>';
echo date ("Y/m/d", strtotime ("today")). 'の運勢は'. '<br>';
echo '選ばれた数字は'. $value. '<br>';

switch($value) {
    case $value == 0;
    echo '凶';
    break;
    case $value >= 1 && $value <= 3;
    echo '小吉';
    break;
    case $value >= 4 && $value <= 6;
    echo '中吉';
    break;
    case $value >= 7 && $value <= 8;
    echo '吉';
    break;
    case $value == 9;
    echo '大吉';
    break;
    
}
?>