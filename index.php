<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Angka ke Nilai Huruf</title>
</head>
<body>
    <form method="post" action="">
        Masukkan Nilai: <input type="text" name="nilai" />
        <input type="submit" value="Konversi" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];
        
        if (!is_numeric($nilai) || $nilai < 0 || $nilai > 100) {
            echo "Nilai tidak valid. Masukkan nilai antara 0-100.";
        } else {
            if ($nilai >= 85) {
                $nilaiHuruf = 'A';
            } elseif ($nilai >= 70) {
                $nilaiHuruf = 'B';
            } elseif ($nilai >= 55) {
                $nilaiHuruf = 'C';
            } elseif ($nilai >= 40) {
                $nilaiHuruf = 'D';
            } else {
                $nilaiHuruf = 'E';
            }

            echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf: $nilaiHuruf";
        }
    }
    ?>
</body>
</html>
