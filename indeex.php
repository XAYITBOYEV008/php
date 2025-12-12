<?php
// Tup son topish misoli

$son = 17;

// Dastlabki taxmin: tub
$tub = $son > 1;

// 2 dan ildizigacha bo‘linishlarni tekshirish
for ($i = 2; $i * $i <= $son && $tub; $i++) {
    if ($son % $i == 0) $tub = false;
}

// Natijani chiqarish
echo $tub ? "Bu tub son: $son" : "Bu tub son emas: $son";
?>
