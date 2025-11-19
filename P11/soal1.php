<?php
// saldo_bank.php

function formatIDR($angka) {
    return "Rp " . number_format($angka, 0, ",", ".") . ",-";
}

$hasil = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $saldo = floatval(str_replace([',','.' ], ['', ''], $_POST['saldo'])); 
    // jika user input dengan titik/koma, tolong input sebagai angka tanpa simbol.
    if ($saldo == 0 && $_POST['saldo'] !== "0") {
        // coba parse biasa
        $saldo = floatval($_POST['saldo']);
    }
    $bulan = intval($_POST['bulan']);
    $admin = 9000; // biaya admin per bulan

    $log = [];
    $current = $saldo;
    for ($i = 1; $i <= $bulan; $i++) {
        // tentukan persentase per tahun
        if ($current < 1100000) {
            $annual = 0.03; // 3% p.a.
        } else {
            $annual = 0.04; // 4% p.a.
        }
        $monthly_interest = $current * ($annual / 12);
        $current += $monthly_interest;
        // potong biaya administrasi
        $current -= $admin;
        // jika saldo bisa negatif, biarkan (soal tidak melarang)
        $log[] = [
            'bulan' => $i,
            'rate_p_a' => $annual * 100,
            'bunga_bulan' => $monthly_interest,
            'saldo_setelah' => $current
        ];
    }

    $hasil = [
        'saldo_awal' => $saldo,
        'bulan' => $bulan,
        'saldo_akhir' => $current,
        'log' => $log
    ];
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simulasi Saldo Bank</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        input[type=text], input[type=number] { padding:8px; width:200px; }
        table { border-collapse: collapse; margin-top: 10px; }
        table, th, td { border:1px solid #ccc; padding:6px; }
    </style>
</head>
<body>
    <h2>Simulasi Saldo Bank per Bulan</h2>
    <form method="post">
        <label>Saldo Awal (angka, contoh 1000000):</label><br>
        <input type="text" name="saldo" required value="<?php echo isset($_POST['saldo'])?htmlspecialchars($_POST['saldo']):'1000000'; ?>"><br><br>
        <label>Jangka Waktu (bulan):</label><br>
        <input type="number" name="bulan" required min="1" value="<?php echo isset($_POST['bulan'])?intval($_POST['bulan']):12; ?>"><br><br>
        <button type="submit">Hitung</button>
    </form>

    <?php if ($hasil): ?>
        <h3>Hasil</h3>
        <p>Saldo awal: <?php echo formatIDR($hasil['saldo_awal']); ?></p>
        <p>Periode: <?php echo $hasil['bulan']; ?> bulan</p>
        <p><strong>Saldo akhir: <?php echo formatIDR($hasil['saldo_akhir']); ?></strong></p>

        <h4>Rincian tiap bulan</h4>
        <table>
            <tr>
                <th>Bulan</th>
                <th>Rate p.a. (%)</th>
                <th>Bunga bulan (Rp)</th>
                <th>Saldo setelah bulan (Rp)</th>
            </tr>
            <?php foreach ($hasil['log'] as $r): ?>
            <tr>
                <td><?php echo $r['bulan']; ?></td>
                <td><?php echo number_format($r['rate_p_a'],2); ?></td>
                <td><?php echo formatIDR($r['bunga_bulan']); ?></td>
                <td><?php echo formatIDR($r['saldo_setelah']); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
