<?php 
$even_num = [];
$odd_num = [];

function sort_number($number){
    global $even_num;
    global $odd_num;
    
    if($number % 2 == 0) {
        array_push($even_num, $number);
    } else {
        array_push($odd_num, $number);
    }
}
sort_number(8);
sort_number(10);
sort_number(9);
sort_number(1);

var_dump($even_num);
var_dump($odd_num);
?>