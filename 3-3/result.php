<?php
$numbers = $_GET ['numbers'];
$number = $numbers[1];

echo date ("Y/m/d", strtotime ("today")). 'の運勢は'. '<br>';
echo '選ばれた数字は'. $number. '<br>';

switch ($number) {
    case '0';
    print '凶';
    break;
    case '1';
    print '小吉';
    break;
    case '2';
    print '小吉';
    break;
    case '3';
    print '小吉';
    break;
    case '4';
    print '中吉';
    break;
    case '5';
    print '中吉';
    break;
    case '6';
    print '中吉';
    break;
    case '7';
    print '吉';
    break;
    case '8';
    print '吉';
    break;
    case '9';
    print '大吉';
    break;
}

?>