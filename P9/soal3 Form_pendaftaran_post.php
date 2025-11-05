<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru (POST)</title>
</head>
<body>
    <h2>Form Pendaftaran Mahasiswa Baru Universitas X</h2>
    <form action="soal3 proses_pendaftaran_post.php" method="post">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama"><br><br>

        <label>Tempat Lahir:</label>
        <input type="text" name="tempat"><br><br>

        <label>Tanggal Lahir:</label>
        <select name="tgl">
            <?php
                for ($i=1; $i<=31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <select name="bln">
            <?php
                for ($i=1; $i<=12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <select name="thn">
            <?php
                for ($i=1980; $i<=2005; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
        <br><br>

        <label>Alamat Rumah:</label><br>
        <textarea name="alamat" rows="3" cols="40"></textarea><br><br>

        <label>Jenis Kelamin:</label>
        <input type="radio" name="jk" value="Pria"> Pria
        <input type="radio" name="jk" value="Wanita"> Wanita
        <br><br>

        <label>Asal Sekolah:</label>
        <input type="text" name="sekolah"><br><br>

        <label>Nilai UAN:</label>
        <input type="text" name="nilai"><br><br>

        <input type="submit" value="Kirim">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
