<!DOCTYPE html>
<html>
<body>
    <?php
    $data = array(
        array("Nama", "Umur", "Alamat"),
        array("Rayhan", 19, "Yogyakarta"),
        array("Budi", 22, "Jakarta"),
        array("Siti", 20, "Bandung"),
        array("Ali", 25, "Surabaya"),
        array("Dewi", 21, "Semarang"),
        array("Andi", 23, "Medan"),
        array("Rina", 18, "Bali"),
        array("Eko", 24, "Malang"),
        array("Sari", 22, "Palembang")
    );

    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    foreach ($data as $baris) {
        echo "<tr>";
        foreach ($baris as $kolom) {
            echo "<td>" . $kolom . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
