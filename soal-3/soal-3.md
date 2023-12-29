## if-else
Merupakan blok kode untuk melakukan suatu pengkondisian di dalamnya, dengan menerapkan prinsip-prinsip logika di dalamnya. Jika suatu blok memiliki kondisi yang memenuhi, maka blok kode itu yang akan dijalankan.

### Penggunaan
````
<?php
$nilai = 30;

if ($nilai >= 60) {
    echo "Anda lulus";
} else if ($nilai >= 40) {
    echo "Anda Remidi";
} else {
    echo "Anda Gagal";
}
?>
````

## Switch case
Blok kode untuk melakukan suatu pengkondisian di dalamnya, dengan menerapkan prinsip mencocokan data. Jika suatu blok memiliki kondisi yang cocok dengan definisi data yang ditentukan, maka blok kode itu yang akan dijalankan

### Penggunaan
````
<?php
$color = "Red";

switch ($color) {
    case "Yellow":
        echo "Kuning";
        break;
    case "Red":
        echo "Merah";
        break;
    case "Blue":
        echo "Biru";
        break;
    default:
        echo "Warna Lainnya";
}
?>
````

## while
Blok kode untuk melakukan suatu perulangan, dengan memeriksa kondisionalnya bernilai true dan kemudian akan menjalankan perulangan.

### Penggunaan
````
<?php
$i = 1;
while ($i <= 10) {
    echo "Perulangan ke-$i".PHP_EOL;
    $i++;
}
?>
````

## Do while
Blok kode untuk melakukan suatu perulangan, dengan menjalankan blok kode nya terlebih dahulu kemudian mengecek apakah kondisionalnya bernilai true sebelum melakukan perulangan selanjutnya.

### penggunaan
````
<?php
$i = 1;
do {
    echo "Perulangan ke-$i".PHP_EOL;
    $i++;
} while ($i <= 15);
?>
````

## For
Blok kode untuk melakukan suatu perulangan, dengan mendefinisikan berapa jumlah perulangan yang akan dieksekusi nantinya.

### Penggunaan
````
<?php
for ($i = 1; $i <= 20; $i++) {
    echo "Perulangan ke-$i".PHP_EOL;
}
?>
````

## Foreach
Blok kode untuk melakukan suatu perulangan item-item yang ada di dalam suatu Array.

### Penggunaan
````
<?php
$colors = array("Kuning", "Merah", "Biru", "Hijau");

foreach ($colors as $color) {
    echo "Saya suka $color".PHP_EOL;
}
?>
````