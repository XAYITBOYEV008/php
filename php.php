<?php
$arr = [30, 10, 50];         

$arr[] = 40;                 
unset($arr[array_search(10, $arr)]); 
sort($arr);                  

print_r(array_values($arr)); 
