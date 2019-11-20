<?php
var_dump($_POST);
$exp = $_POST['sel'];

function calc( $exp ) {
    $var1 = $_POST['one'];
    $var2 = $_POST['two'];
    if($exp == 'сложение') {
       $res = $var1 + $var2;
        echo $res;
    }
    elseif ($exp == 'вычитание') {
         $res = $var1 - $var2;
        echo $res;
    }
    elseif ($exp == 'деление') {
        $res = $var1 / $var2;
        echo $res;
    }
    elseif ($exp == 'умножение') {
         $res = $var1 * $var2;
         echo $res;


    }
    else {
        $res = NULL;
        echo 'no';
    }
}
//echo $result = $_POST['one'] . $_POST['two'];
calc($exp);
$var3 = $_POST['text'];
function otz($var3) {
    echo $var3;
}
otz($var3);
?>