<?php
// Foydalanuvchidan GET orqali son qabul qilish, default = 67
$a = isset($_GET['son']) ? (int)$_GET['son'] : 67;
$e = $a ** 3;

if ($a > 0 && $a < 10) {
    echo "Sonning kubi: " . $e;
} elseif ($a >= 10 && $a < 50) {
    echo "Sonning kvadrat ildizi: " . sqrt($a);
} else {
    echo "Bunday son mavjud emas";
}
?>

