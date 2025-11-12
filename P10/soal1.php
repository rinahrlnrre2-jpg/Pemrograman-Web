<!DOCTYPE html>
<html>
<head>
    <title>Cek Tahun Kabisat</title>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>
    <form method="post">
        Masukkan Tahun: <input type="number" name="tahun" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = $_POST['tahun'];

        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<h3>Tahun $tahun adalah tahun kabisat ✅</h3>";
        } else {
            echo "<h3>Tahun $tahun bukan tahun kabisat ❌</h3>";
        }
    }
    ?>
</body>
</html>
