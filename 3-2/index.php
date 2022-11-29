<?php
$fruits = ['りんご' => 100, 'みかん' => 50, 'もも' => 300];
$quantity = [3, 3, 10];

function price_apple ($value, $quantity) {
    echo 'りんごは' . $value * $quantity . '円です。' . '<br>';
    function price_orange ($value, $quantity) {
        echo 'みかんは' . $value * $quantity . '円です。'. '<br>';
        function price_peach ($value, $quantity) {
            echo 'ももは' . $value * $quantity . '円です。'. '<br>';
        }
    }
}

price_apple ($fruits['りんご'],$quantity[0]);
price_orange ($fruits['みかん'],$quantity[1]);
price_peach ($fruits['もも'],$quantity[2]);

?>