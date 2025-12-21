<?php
echo "1. Juft/Toq aniqlash:\n";
$son = 7;
if($son % 2 == 0) {
    echo "$son - juft son\n";
} else {
    echo "$son - toq son\n";
}

echo "\n2. 3 ga karrali sonlar (1-20):\n";
for($i = 1; $i <= 20; $i++) {
    if($i % 3 == 0) {
        echo $i . " ";
    }
}

echo "\n\n3. 10 dan 1 gacha sonlar:\n";
for($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

echo "\n\n4. Palindrom tekshirish:\n";
$soz = "radar";
if($soz == strrev($soz)) {
    echo "'$soz' - palindrom\n";
} else {
    echo "'$soz' - palindrom emas\n";
}

// ==============================================
// 5. SO'ZDAGI UNLI HARFLAR
// ==============================================
echo "\n5. So'zdagi unli harflar soni:\n";
$matn = "kompyuter";
$unlilar = ['a', 'e', 'i', 'o', 'u'];
$sanash = 0;

for($i = 0; $i < strlen($matn); $i++) {
    if(in_array($matn[$i], $unlilar)) {
        $sanash++;
    }
}
echo "'$matn' so'zida $sanash ta unli harf bor\n";

// ==============================================
// 6. SO'ZNI TESKARI YOZISH
// ==============================================
echo "\n6. So'zni teskari yozish:\n";
$soz = "salom";
echo "Asl: $soz\n";
echo "Teskari: " . strrev($soz) . "\n";

// ==============================================
// 7. MASSIV YIG'INDISI
// ==============================================
echo "\n7. Massiv yig'indisi:\n";
$sonlar = [2, 4, 6, 8, 10];
$sum = 0;

foreach($sonlar as $son) {
    $sum += $son;
}
echo "Massiv: " . implode(", ", $sonlar) . "\n";
echo "Yig'indi: $sum\n";

// ==============================================
// 8. ENG KATTA SON
// ==============================================
echo "\n8. Massivdagi eng katta son:\n";
$sonlar = [45, 12, 89, 34, 67];
$eng_katta = $sonlar[0];

foreach($sonlar as $son) {
    if($son > $eng_katta) {
        $eng_katta = $son;
    }
}
echo "Massiv: " . implode(", ", $sonlar) . "\n";
echo "Eng katta son: $eng_katta\n";

// ==============================================
// 9. MASSIVNI TESKARI TARTIB
// ==============================================
echo "\n9. Massivni teskari tartibda:\n";
$sonlar = [1, 2, 3, 4, 5];
echo "Asl: " . implode(", ", $sonlar) . "\n";
echo "Teskari: " . implode(", ", array_reverse($sonlar)) . "\n";

// ==============================================
// 10. JUFT SONLARNI AJRATISH
// ==============================================
echo "\n10. Faqat juft sonlarni chiqarish:\n";
$sonlar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$juft_sonlar = [];

foreach($sonlar as $son) {
    if($son % 2 == 0) {
        $juft_sonlar[] = $son;
    }
}
echo "Asl massiv: " . implode(", ", $sonlar) . "\n";
echo "Juft sonlar: " . implode(", ", $juft_sonlar) . "\n";

// ==============================================
// 11. FAKTORIAL HISOBLASH
// ==============================================
echo "\n11. Faktorial hisoblash:\n";
$n = 5;
$faktorial = 1;

for($i = 1; $i <= $n; $i++) {
    $faktorial *= $i;
}
echo "$n! = $faktorial\n";

// ==============================================
// 12. FIBONACHI KETMA-KETLIK
// ==============================================
echo "\n12. Fibonachi ketma-ketligi (10 ta):\n";
$a = 0;
$b = 1;
echo "$a $b ";

for($i = 2; $i < 10; $i++) {
    $c = $a + $b;
    echo "$c ";
    $a = $b;
    $b = $c;
}

// ==============================================
// 13. TUB SON TEKSHIRISH
// ==============================================
echo "\n\n13. Tub son tekshirish:\n";
$son = 17;
$tub = true;
if($son < 2) {
    $tub = false;
} else {
    for($i = 2; $i <= $son/2; $i++) {
        if($son % $i == 0) {
            $tub = false;
            break;
        }
    }
}

if($tub) {
    echo "$son - tub son\n";
} else {
    echo "$son - tub emas\n";
}

// ==============================================
// 14. SON RAQAMLARI YIG'INDISI
// ==============================================
echo "\n14. Son raqamlari yig'indisi:\n";
$son = 12345;
$sum_raqam = 0;
$temp = $son;

while($temp > 0) {
    $raqam = $temp % 10;
    $sum_raqam += $raqam;
    $temp = (int)($temp / 10);
}
echo "$son sonining raqamlari yig'indisi: $sum_raqam\n";

// ==============================================
// 15. TAKRORLANUVCHI RAQAMLAR
// ==============================================
echo "\n15. Massivda takrorlanuvchi sonlar:\n";
$sonlar = [1, 2, 3, 2, 4, 5, 1, 3];
$takrorlar = [];

foreach(array_count_values($sonlar) as $son => $count) {
    if($count > 1) {
        $takrorlar[] = $son;
    }
}
echo "Massiv: " . implode(", ", $sonlar) . "\n";
echo "Takrorlanuvchi sonlar: " . implode(", ", $takrorlar) . "\n";

// ==============================================
// 16. IKKI SONNI ALMASHTIRISH
// ==============================================
echo "\n16. Ikki sonni almashtirish:\n";
$a = 10;
$b = 20;
echo "Oldin: a = $a, b = $b\n";

$temp = $a;
$a = $b;
$b = $temp;
echo "Keyin: a = $a, b = $b\n";

// ==============================================
// 17. SON DARAJASI
// ==============================================
echo "\n17. Son darajasini hisoblash:\n";
$son = 2;
$daraja = 3;
$natija = 1;

for($i = 1; $i <= $daraja; $i++) {
    $natija *= $son;
}
echo "$son^$daraja = $natija\n";

// ==============================================
// 18. VATAR (IF-ELSE ZANJIRI)
// ==============================================
echo "\n18. Baholash tizimi:\n";
$baho = 85;

if($baho >= 90) {
    echo "Baho: A\n";
} elseif($baho >= 80) {
    echo "Baho: B\n";
} elseif($baho >= 70) {
    echo "Baho: C\n";
} elseif($baho >= 60) {
    echo "Baho: D\n";
} else {
    echo "Baho: F\n";
}

// ==============================================
// 19. KALKULYATOR
// ==============================================
echo "\n19. Oddiy kalkulyator:\n";
$a = 15;
$b = 3;
$amal = "*";

switch($amal) {
    case "+":
        echo "$a + $b = " . ($a + $b) . "\n";
        break;
    case "-":
        echo "$a - $b = " . ($a - $b) . "\n";
        break;
    case "*":
        echo "$a × $b = " . ($a * $b) . "\n";
        break;
    case "/":
        echo "$a ÷ $b = " . ($a / $b) . "\n";
        break;
    default:
        echo "Noto'g'ri amal!\n";
}

// ==============================================
// 20. SON MUSBAT/MANFIY/NOL
// ==============================================
echo "\n20. Sonni tekshirish:\n";
$son = -5;

if($son > 0) {
    echo "$son - musbat\n";
} elseif($son < 0) {
    echo "$son - manfiy\n";
} else {
    echo "$son - nol\n";
}

echo "\n=== TEST TUGADI ===";
?