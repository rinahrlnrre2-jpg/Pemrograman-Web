<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Penghitungan Pecahan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f9; }
        .container { max-width: 800px; margin: 20px auto; padding: 25px; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .results-section { display: flex; justify-content: space-between; gap: 20px; flex-wrap: wrap; }
        .result-box { flex: 1 1 45%; padding: 15px; border: 1px solid #28a745; background-color: #e9ffe9; border-radius: 5px; min-width: 300px; }
        .error { color: red; font-weight: bold; }
        h3 { color: #333; border-bottom: 1px dashed #ccc; padding-bottom: 5px; }
        a { display: inline-block; margin-top: 15px; padding: 8px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h2> Hasil Perhitungan Pecahan Uang</h2>

    <?php
    // Cek apakah data dari form sudah dikirim
    if (!isset($_POST['submit']) || !isset($_POST['jumlah_uang'])) {
        echo "<p class='error'>Akses ditolak. Silakan masukkan jumlah uang melalui formulir.</p>";
        echo "<a href='input_uang.html'>Kembali ke Formulir</a>";
        exit;
    }

    $jumlahUang = (int)$_POST['jumlah_uang'];

    if ($jumlahUang < 0) {
        echo "<p class='error'>Masukkan jumlah uang yang valid (bilangan positif).</p>";
    } else {
        echo "<div class='results-section'>";

        // --- FUNGSI PERHITUNGAN PECAHAN ---
        function hitungPecahan($total, $pecahanSet, $judul) {
            $sisaUang = $total;
            $hasil = [];
            
            // Pastikan pecahan diurutkan dari yang terbesar ke terkecil
            krsort($pecahanSet);

            foreach ($pecahanSet as $nilai) {
                $jumlah = intdiv($sisaUang, $nilai);
                $hasil[$nilai] = $jumlah;
                $sisaUang %= $nilai;
            }

            echo "<div class='result-box'>";
            echo "<h3>$judul untuk Rp. " . number_format($total, 0, ',', '.') . "</h3>";
            
            foreach ($hasil as $nilai => $jumlah) {
                echo "Jumlah Rp. " . number_format($nilai, 0, ',', '.') . " : **" . $jumlah . "**<br />";
            }

            if ($sisaUang > 0) {
                 echo "<hr style='border-color: #28a745;'>";
                 echo "Sisa uang yang tidak bisa dipecah: **Rp. " . number_format($sisaUang, 0, ',', '.') . "**";
            }
            echo "</div>";
        }
        // --- AKHIR FUNGSI ---

        // --- PROSES 1: Pecahan dari Kode PHP Awal (20K & 100) ---
        $pecahanA = [100000, 50000, 20000, 5000, 100, 50];
        hitungPecahan($jumlahUang, $pecahanA, "1. Versi Kode PHP Awal");

        // --- PROSES 2: Pecahan dari Teks Soal (30K) ---
        // Menggunakan 100 sebagai pecahan 'sob'
        $pecahanB = [100000, 50000, 30000, 5000, 100, 50]; 
        hitungPecahan($jumlahUang, $pecahanB, "2. Versi Teks Soal");
        
        echo "</div>"; // Tutup results-section
    }
    ?>
    
    <a href='input_uang.html'>&#x2190; Hitung Lagi</a>

</div>

</body>
</html>