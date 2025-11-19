<?php
// tripel_25.php

$target = 25;
$solutions = [];
$count = 0;

// x, y, z bilangan asli mulai dari 1
for ($x = 1; $x <= $target-2; $x++) {
    for ($y = 1; $y <= $target-1-$x; $y++) {
        $z = $target - $x - $y;
        if ($z >= 1) {
            $solutions[] = [$x, $y, $z];
            $count++;
        }
    }
}

// tampilkan hasil
echo "<!doctype html><html><head><meta charset='utf-8'><title>Tripel x+y+z=25</title>";
echo "<style>body{font-family:Arial, sans-serif;margin:20px} table{border-collapse:collapse} th,td{padding:6px;border:1px solid #ccc;}</style>";
echo "</head><body>";
echo "<h2>Semua pasangan (x, y, z) bilangan asli yang memenuhi x + y + z = 25</h2>";
echo "<table><tr><th>No</th><th>x</th><th>y</th><th>z</th></tr>";
$i = 1;
foreach ($solutions as $s) {
    echo "<tr><td>{$i}</td><td>{$s[0]}</td><td>{$s[1]}</td><td>{$s[2]}</td></tr>";
    $i++;
}
echo "</table>";
echo "<p>Jumlah penyelesaian: <strong>{$count}</strong></p>";
echo "</body></html>";
?>
