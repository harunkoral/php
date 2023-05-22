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
    session_start();
    //giriş yap butonuna basıldığında girilen bilgileri alıyoruz
    $kullaniciad = $_POST["kullaniciad"];
    $sifre = $_POST["sifre"];

    //veritabanında girilen kullanıcı adı ve şifreye ait kayıt var mı kontrol ediyoruz
    $sorgu = mysqli_query($baglanti, "SELECT * FROM uye WHERE kullaniciad='$kullaniciad' AND sifre='$sifre'");
    $bilgi = mysqli_fetch_assoc($sorgu);

    if ($sorgu) {
        //kullanıcı adı ve şifre doğruysa giriş yapılıyor
        $_SESSION["login"] = true;
        $_SESSION["id"] = $bilgi["id"];
        $_SESSION["kullaniciad"] = $bilgi["kullaniciad"];
        $_SESSION["sifre"] = $bilgi["sifre"];
        header("Location: index.php");
        exit;
    } else {
        header("Location: giris.php");
        exit;
    }
    ?>
</body>

</html>