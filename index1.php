<!DOCTYPE html>
<html>
<head>
    <title>Segitiga Bintang</title>
</head>
<body>
    <form method="post" action="">
        Masukkan Tinggi Segitiga: <input type="number" name="tinggi" />
        <input type="submit" value="Buat Segitiga" />
    </form>

    <pre>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tinggi = intval($_POST["tinggi"]);

        for ($baris = 1; $baris <= $tinggi; $baris++) {
            // Buat sejumlah spasi
            for ($i = 1; $i <= $tinggi - $baris; $i++) {
                echo "&nbsp;";
            }

            // Tampilkan *
            for ($j = 1; $j < 2 * $baris; $j++) {
                echo "*";
            }

            // Pindah baris
            echo "<br>";
        }
    }
    ?>
    </pre>
</body>
</html>
