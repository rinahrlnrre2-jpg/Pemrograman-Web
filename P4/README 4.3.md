# Penjelasan 4.3

## Soal

> Pada praktikum 4.3, ubahlah script pada baris 5 menjadi:

<link rel="stylesheet" type="text/css" href="#">

Jalankan di browser, amati, dan jelaskan mengapa hasilnya seperti itu!



## Jawaban

### 1. Sebelum diubah (href memanggil file CSS)

<link rel="stylesheet" type="text/css" href="CSS 4.3 .css">

Browser berhasil menemukan file gaya.css.

Semua aturan CSS (warna, background, font, dll) diterapkan ke halaman.

Hasil: halaman tampil berwarna sesuai style (contohnya teks “ANGGREK” merah, background ungu, teks putih/kuning, dsb).


### 2. Setelah diubah (href diganti #)

<link rel="stylesheet" type="text/css" href="#">

Browser tidak menemukan file CSS karena # bukanlah file stylesheet yang valid.

Akibatnya tidak ada CSS eksternal yang diterapkan.

Hasil: tampilan halaman kembali ke default HTML (hanya teks hitam dengan background putih polos).


### 3. Kesimpulan

href="nama_file.css" → Menghubungkan HTML dengan file CSS, sehingga style dapat diterapkan.

href="#" → Tidak menghubungkan ke file CSS manapun, jadi tampilan halaman hanya menggunakan style bawaan browser (default style).
