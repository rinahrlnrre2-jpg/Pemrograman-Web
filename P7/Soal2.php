<?php
$jumlahUang = 1575250;

// Menghitung jumlah masing-masing pecahan
$a = floor($jumlahUang / 100000);
$sisa = $jumlahUang % 100000;

$b = floor($sisa / 50000);
$sisa = $sisa % 50000;

$c = floor($sisa / 20000);
$sisa = $sisa % 20000;

$d = floor($sisa / 5000);
$sisa = $sisa % 5000;

$e = floor($sisa / 100);
$sisa = $sisa % 100;

$f = floor($sisa / 50);
$sisa = $sisa % 50;

// Menampilkan hasil
echo "Jumlah Rp. 100.000 : ".$a."<br />";
echo "Jumlah Rp. 50.000 : ".$b."<br />";
echo "Jumlah Rp. 20.000 : ".$c."<br />";
echo "Jumlah Rp. 5.000 : ".$d."<br />";
echo "Jumlah Rp. 100 : ".$e."<br />";
echo "Jumlah Rp. 50 : ".$f."<br />";
?>