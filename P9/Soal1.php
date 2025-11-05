<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $saldoAwal = $_POST['saldoAwal'];
    $bungaPersen = $_POST['bunga'];
    $bulan = $_POST['bulan'];

    $bunga = $bungaPersen / 100;
    
    $saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan);
}
?>
<html>
  <head>
    <title>Hasil Perhitungan Saldo</title>
  </head>
  <body>
    <h2>Hasil Perhitungan Saldo Akhir</h2>
    <?php
    echo "<p>Saldo awal: Rp " . number_format($saldoAwal, 0, ',', '.') . "</p>";
    echo "<p>Bunga per bulan: " . $bungaPersen . "%</p>";
    echo "<p>Lama menabung: " . $bulan . " bulan</p>";
    echo "<hr>";
    echo "<h3>Saldo akhir: Rp " . number_format($saldoAkhir, 0, ',', '.') . "</h3>";
    ?>
  </body>
</html>
