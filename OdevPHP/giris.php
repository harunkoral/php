<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Document</title>
</head>

<body class="p-3 m-0 border-0 bd-example bg-info bg-gradient">

  <!-- <form method="POST" action="girisyap.php" class="p-3 m-3 border border-black border-3 rounded w-50 d-flex flex-column">
        <input type="text" name="kullaniciad" placeholder="Kullanıcıadı">
        <input type="password" name="sifre">
        <input type="submit" name="girisYap" value="Giriş Yap">
    </form> -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center">Giriş Yap</h2>
        <form method="POST" action="girisyap.php">
          <div class="form-group">
            <label for="username">Kullanıcı Adı</label>
            <input type="text" name="kullaniciad" class="form-control" placeholder="Kullanıcı adınızı girin">
          </div>
          <div class="form-group">
            <label for="password">Parola</label>
            <input type="password" class="form-control" name="sifre" placeholder="Parolanızı girin">
          </div>
          <button type="submit" class="btn btn-primary" name="girisYap">Giriş Yap</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



</body>

</html>