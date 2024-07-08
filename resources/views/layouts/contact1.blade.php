<!-- resources/views/layouts/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Kontak Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

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
<div class="container">
    <div class="contact-info">
        <h1>Kontak Kami</h1>
        <p>Anda dapat menghubungi kami melalui platform berikut:</p>
        <ul>
            <li><a href="https://wa.me/1234567890" target="_blank"><i class="bi bi-whatsapp"></i>Chat dengan kami di WhatsApp</a></li>
            <li><a href="mailto:info@yourdomain.com"><i class="bi bi-envelope-at-fill"></i> info@yourdomain.com</a></li>
            <li><i class="bi bi-geo-alt-fill"></i> Jalan Contoh No. 123, Kota, Negara</li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
