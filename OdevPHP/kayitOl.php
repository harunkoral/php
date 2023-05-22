<?php
include("baglanti.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example bg-info bg-gradient">

    <!-- Example Code -->
    <!-- <form method="POST" action="kayitgonder.php">
    <input type="text" name="adsoyad" placeholder="Ad Soyad">
    <input type="text" name="kullaniciad" placeholder="Kullanıcıadı">
    <input type="password" name="sifre">
    <input type="submit" name="kayitOl" value="Kayıt Ol">
    </form> -->
    
    <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">Kayıt Ol</h2>
        <form method="POST" action="kayitgonder.php">
          <div class="form-group">
            <label for="name">Ad Soyad</label>
            <input type="text" class="form-control" name="adsoyad" placeholder="Adınızı Soyadınızı girin">
          </div>
          
          <div class="form-group">
            <label for="text">Kullanıcı Ad</label>
            <input type="text" class="form-control" name="kullaniciad" placeholder="Kullanıcıadı">
          </div>
          <div class="form-group">
            <label for="password">Parola</label>
            <input type="password" class="form-control" name="sifre" placeholder="Parolanızı girin">
          </div>
          <button type="submit" class="btn btn-primary" name="kayitOl" >Kayıt Ol</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
  
  </body>
</html>
