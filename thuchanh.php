<?php
echo "<pre>";

// Bài 1: In số chẵn từ 1 đến 10
echo "<h3>Bài 1: Các số chẵn từ 1 đến 10</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br><hr>";

// Bài 2: Kiểm tra số nguyên tố
echo "<h3>Bài 2: Kiểm tra số nguyên tố</h3>";
function checkPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

$number = 7; 
if (checkPrime($number)) {
    echo "Số $number là số nguyên tố.";
} else {
    echo "Số $number không phải là số nguyên tố.";
}
echo "<br><hr>";

// Bài 3: In hình chữ nhật bằng dấu sao
echo "<h3>Bài 3: In hình chữ nhật (Rộng 5, Cao 3)</h3>";
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

inHinhChuNhat(5, 3);

echo "</pre>";
?>
