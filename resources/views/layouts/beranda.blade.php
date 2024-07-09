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

@extends('layouts.master')
@include('includes.nav')
  <br>
  <br>
  <br>
  <br>

  <!-- Gambar -->
  <div class="centered-image">
    <img src="{{ asset('image/sahpiw.jpg') }}" alt="">
  </div>
  <br>
  <div class="section">
    <h2>Kurban</h2>
    <p>Kurban yang berarti dekat atau mendekatkan atau disebut juga Udhhiyah atau Dhahiyyah secara harfiah berarti hewan sembelihan. Sementara itu, ibadah kurban adalah salah satu ibadah pemeluk agama Islam, dengan melakukan penyembelihan hewan ternak untuk dipersembahkan kepada Allah.</p>
  </div>

  <div class="product-list">
    <div class="product">
        <img src="{{ asset('image/kambingd.png') }}" alt="Product 1">
        <h3>Kambing Barawa</h3>
        <p>25.000.000/Ekor</p>
        <button><a href="{{route('inputtabungan')}}">Menabung</a></button>
    </div>
    <div class="product">
        <img src="{{ asset('image/kambingd.png') }}" alt="Product 2">
        <h3>Kambing Barawa</h3>
        <p>25.000.000/Ekor</p>
        <button><a href="{{route('inputtabungan')}}">Menabung</a></button>
    </div>
    <div class="product">
        <img src="{{ asset('image/sapid.png') }}" alt="Product 3">
        <h3>Sapi Madura</h3>
        <p>34.000.000/Ekor</p>
        <button><a href="{{route('inputtabungan')}}">Menabung</a></button>
    </div>
    <div class="product">
        <img src="{{ asset('image/sapid.png') }}" alt="Product 4">
        <h3>Sapi Madura</h3>
        <p>34.000.000/Ekor</p>
        <button><a href="{{route('inputtabungan')}}">Menabung</a></button>
    </div>
</div>

<div class="text-with-icon">
    <a href="{{route('produk')}}">
        <i class="bi bi-eye-fill icon"></i>Selengkapnya
    </a>
</div>

<br>
<div class="footer">
  <div class="left-content">
    <h2>DKM</h2>
    <div class="location">
      <span class="icon"><i class="bi bi-geo-alt-fill"></i></span>
      <span class="text">Lokasi</span>
    </div>
    <div class="text">Jl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce</div>
  </div>
  <div class="center-content">
    <div class="website">
      <span class="icon"><i class="bi bi-globe"></i></span>
      <span class="text">Loremipsum.com</span>
    </div>
    <div class="email">
      <span class="icon">&#9993;</span>
      <span class="text">Loremipsum@gmail.com</span>
    </div>
    <div class="phone">
      <span class="icon">&#9742;</span>
      <span class="text">+6233333</span>
    </div>
  </div>
  <div class="right-content">
    <div class="dkm">DKM merupakan Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper pretium urna,
       a suscipit felis lobortis lacinia. Nulla facilisi. Suspendisse potenti. Duis id bibendum velit.
        Aenean nec aliquet justo. Etiam faucibus nisl quis imperdiet posuere. Nullam vel ultrices nibh. Nunc erat massa,
         aliquet sed massa et, viverra eleifend est. Maecenas imperdiet eleifend quam, vel fringilla eros feugiat id. Maecenas 
         fringilla sagittis egestas. Maecenas fringilla, massa vel maximus ultricies, urna massa maximus diam, ac tincidunt nulla
          magna nec lectus. Fusce varius nibh est, </div>
  </div>
</div>


  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
