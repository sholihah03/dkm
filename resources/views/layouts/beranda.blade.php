<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Navigation Bar With Scroll Every Section</title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/beranda.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="navbar">
      <div class="logo"><a href="#">DKM</a></div>
      <ul class="menu">
        <li><a href="#Home">Beranda</a></li>
        <li><a href="#About">Produk</a></li>
        <li><a href="#Category">Tentang Kami</a></li>
        <li><a href="#Contact">Kontak</a></li>
        <li><a href="#Feedback"><i class="bi bi-person-fill"></i></a></li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>

  <!-- Gambar -->
  <div class="centered-image">
    <img src="{{ asset('image/sahpiw.jpg') }}" alt="">
  </div>

  <div class="card ">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>

  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
