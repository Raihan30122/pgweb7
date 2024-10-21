<!DOCTYPE html>
<html>
<body>
    <?php
    $umur = 19;

    if ($umur < 18) {
        echo "Anda masih di bawah umur.";
    } elseif ($umur == 18) {
        echo "Selamat, Anda baru saja berusia 18 tahun!";
    } else {
        echo "Anda sudah dewasa.";
    }
    ?>
</body>
</html>
