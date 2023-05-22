<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Satın Alma Sayfası</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">KİTAP Satın Alış</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Ana Sayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Kitaplar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sepet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giriş Yap</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-4">
    <h2 class="mb-4">Satın Alma İşlemi</h2>
    <div class="row">
      <div class="col-md-6">
        <h4>Kitap Bilgileri</h4>
        <p><strong>Kitap Adı:</strong> Türk</p>
        <p><strong>Fiyat:</strong> 60₺</p>
      </div>
      <div class="col-md-6">
        <h4>Ödeme Bilgileri</h4>
        <form>
          <div class="form-group">
            <label for="cardNumber">Kredi Kartı Numarası</label>
            <input type="text" class="form-control" id="cardNumber" placeholder="Kredi kartı numaranızı girin">
          </div>
          <div class="form-group">
            <label for="expiryDate">Son Kullanma Tarihi</label>
            <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY">
          </div>
          <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="text" class="form-control" id="cvv" placeholder="CVV">
          </div>
          <button type="submit" class="btn btn-primary">Satın Al</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>