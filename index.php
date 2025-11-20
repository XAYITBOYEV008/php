<?php
$a = 12;
$b = 25;
$c = 7;

$katta = $a;

if ($b > $katta && $b > $c) {
    $katta = $b;
} else if ($c > $katta) {
    $katta = $c;
}

echo "Eng katta son: " . $katta;
?>
