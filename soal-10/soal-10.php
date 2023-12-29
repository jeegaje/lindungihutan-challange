<?php
$angka_sebelumnya = 0;
$angka_sekarang = 1;

echo "Deret Fibonanci :: ";

while ($angka_sekarang < 100) {
    echo $angka_sekarang . " ";

    $angka_selanjutnya = $angka_sebelumnya + $angka_sekarang;
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $angka_selanjutnya;
}
echo PHP_EOL;
?>
