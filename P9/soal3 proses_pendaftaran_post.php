<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran Mahasiswa (POST)</title>
</head>
<body>
    <?php
    // Ambil data dari form menggunakan POST
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $bln = $_POST['bln'];
    $thn = $_POST['thn'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $sekolah = $_POST['sekolah'];
    $nilai = $_POST['nilai'];

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
