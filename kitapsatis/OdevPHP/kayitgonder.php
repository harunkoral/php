<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("baglanti.php");

    $kayit = "INSERT INTO uye (adsoyad,kullaniciad,sifre) VALUES ('" . $_POST["adsoyad"] . "','" . $_POST["kullaniciad"] . "','" . $_POST["sifre"] . "')";

    if (mysqli_query($baglanti, $kayit)) {
        header("Location: giris.php");
        exit;
    } else {
        echo "Kayıt Başarısız" . mysqli_error($baglanti);
    }

    mysqli_close($baglanti);
    ?>
</body>

</html>