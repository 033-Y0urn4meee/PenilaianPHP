<?php

$nama = "iful";
$kelas = "XII PPLG 1";
$nilaitugas = 85;
$nilaiuts = 80;
$nilaiuas = 90;
$nilaiakhir = 85.5;

if ($nilaiakhir >= 90) {
    $predikat = "A";
} elseif ($nilaiakhir >= 80) {
    $predikat = "B";
} elseif ($nilaiakhir >= 70) {
    $predikat = "C";
} elseif ($nilaiakhir >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}

if ($nilaiakhir >= 75) {
    $status = "LULUS";
}
else {
    $status = "Tidak Lulus";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Nama : <?= $nama ?> </p>
    <p>Kelas : <?= $kelas ?> </p>
    <hr>
    <p>Nilai Tugas : <?= $nilaitugas ?> </p>
    <p>Nilai UTS : <?= $nilaiuts ?> </p>
    <p>Nilai UAS : <?= $nilaiuas ?> </p>
    <hr>
    <p>Nilai Akhir : <?= $nilaiakhir ?> </p>
    <p>Predikat : <?= $predikat ?> </p>
    <p>Status : <?= $status ?> </p>

</body>
</html>