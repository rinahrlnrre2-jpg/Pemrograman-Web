<?php
$saldoAwal = 1000000;
$bunga = 0.0025;
$bulan = 11;

// Menghitung saldo akhir (bunga tetap dari saldo awal)
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

// Menampilkan hasil dengan format rupiah
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".number_format($saldoAkhir, 0, ',', '.').";";
?>