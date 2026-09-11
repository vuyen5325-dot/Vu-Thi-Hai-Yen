1C
2B
3A
4B
5B

<?php
// Câu 1: In số chẵn từ 1 đến 10
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}
echo "\n";

// Câu 2: Kiểm tra số nguyên tố
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}
echo isPrime(7) ? "7 la so nguyen to\n" : "7 khong phai so nguyen to\n";

// Câu 3: Hàm in hình chữ nhật và gọi hàm (5x3)
function inHinhChuNhat($w, $h) {
    for ($i = 0; $i < $h; $i++) {
        echo str_repeat("*", $w) . "\n";
    }
}
inHinhChuNhat(5, 3);
?>
