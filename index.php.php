<?php 
$number1 = 58;
$number2 = 69;
$number3 = 32;


if ($number1 > $number2 && $number1 > $number3) {
    echo "$number1 is the greatest number";
}
elseif ($number2 > $number1 && $number2 > $number3) {
    echo "$number2 is the greatest number";
}
else {
    echo "$number3 is the greatest number";
}

?>