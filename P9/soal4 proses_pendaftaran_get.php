<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Mahasiswa (GET)</title>
</head>
<body>
    <?php
    // Ambil data dari form menggunakan GET
    $nama = $_GET['nama'];
    $tempat = $_GET['tempat'];
    $tgl = $_GET['tgl'];
    $bln = $_GET['bln'];
    $thn = $_GET['thn'];
    $alamat = $_GET['alamat'];
    $jk = $_GET['jk'];
    $sekolah = $_GET['sekolah'];
    $nilai = $_GET['nilai'];

    echo "<h3>Terima kasih <b>$nama</b> sudah mengisi form pendaftaran.</h3>";
    echo "Nama Lengkap : $nama<br>";
    echo "Tempat Lahir : $tempat<br>";
    echo "Tanggal Lahir : $tgl - $bln - $thn<br>";
    echo "Alamat Rumah : $alamat<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Asal Sekolah : $sekolah<br>";
    echo "Nilai UAN : $nilai<br>";
    ?>
</body>
</html>