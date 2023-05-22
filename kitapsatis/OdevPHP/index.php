<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Kitap Satışı</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Ana Sayfa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Sepet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='cikis.php'>ÇIKIŞ</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron text-center">
    <h1>Kitap Satışına Hoş Geldiniz</h1>
    <p>En iyi kitapları en uygun fiyatlarla bulabileceğiniz yer!</p>

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <?php
  session_start();
  include("baglanti.php");
  $sorgu = mysqli_query($baglanti, "SELECT * FROM uye");


  if ($_SESSION["login"] == true) {

    echo "";
  } else {
    echo "Siteyi görmek için giriş yapınız.";
    exit;
  }

  ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <div class="kitaplar d-flex p-3">
    <div class="card w-" style="width: 18rem">
      <div class="card-body">
        <h5 class="card-title">Tutunamayanlar</h5>
        <img src="images/indir.jpg" alt="">
        <br>
        <br>
        <a href="satinAl.php" class="btn btn-primary">Satın Al</a>
      </div>
    </div>

    <div class="card" style="width: 18rem">
      <div class="card-body">
        <h5 class="card-title">Çalıkuşu</h5>
        <img style="height: 275px; " src="images/indir (1).jpg" alt="">
        <br>
        <br>
        <a href="satinAl.php" class="btn btn-primary">Satın Al</a>
      </div>
    </div>

    <div class="card" style="width: 18rem">
      <div class="card-body">
        <h5 class="card-title">Victor Hugo</h5>
        <img style="height: 275px; " src="images/images.jpg" alt="">
        <br>
        <br>
        <a href="satinAl.php" class="btn btn-primary">Satın Al</a>
      </div>
    </div>

    <div class="card" style="width: 18rem">
      <div class="card-body">
        <h5 class="card-title">İçimizdeki Şeytan</h5>
        <img style="height: 275px; " src="images/images (1).jpg" alt="">
        <br>
        <br>
        <a href="satinAl.php" class="btn btn-primary">Satın Al</a>
      </div>
    </div>

    <div class="card" style="width: 18rem">
      <div class="card-body">
        <h5 class="card-title">Yaban</h5>
        <img src="images/images.jpeg" alt="">
        <br>
        <br>
        <a href="satinAl.php" class="btn btn-primary">Satın Al</a>
      </div>
    </div>
  </div>

  <div style="
display: flex;
flex-wrap: wrap;
width: 100%;
height: 35vh;
background-color: #171717;
color: white;">


    <div style="
  width: 50%;
  padding: 30px;
  box-sizing: border-box;
  text-align: center;
  font-family: 'Courier New', Courier, monospace;
  ">
      <h3 style="color: #73ddd0;">Hakkımda</h3>
      <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, eius! Asperiores error sed enim id assumenda debitis? Dolores reiciendis ut nesciunt magnam incidunt ea, expedita labore doloremque quas sapiente doloribus?</P>
    </div>

    <div style="
  width: 50%;
  padding: 30px;
  padding-left: 30px;
  box-sizing: border-box;
  text-align: center;
  font-family: 'Courier New', Courier, monospace;
  ">
      <h3 style="color: #73ddd0;">İletişim</h3>
      <div>
        <a href=""><i class="fa-brands fa-instagram fa-xl" style="color: #73ddd0;"></i></a>
        <a href=""><i class="fa-brands fa-facebook fa-xl" style="color: #73ddd0;"></i></a>
        <a href=""><i class="fa-brands fa-linkedin fa-xl" style="color: #73ddd0;"></i></a>
      </div>
    </div>
  </div>


</body>

</html>