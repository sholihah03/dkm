<!DOCTYPE html>
<html>
<head>
  <title>Input Data Peserta</title>
  <link rel="stylesheet" href="{{ asset('css/settings/settings2.css') }}">
  <style>
.nav-tabs {
  display: flex;
  justify-content: space-between; /* Adjusts spacing between items */
  border-bottom: 2px solid #e0e0e0; /* Light gray line below tabs */
}

.nav-link {
  flex: 1; /* Ensures each tab takes equal space */
  text-align: center; /* Centers text within each tab */
  padding: 10px 0; /* Adjust padding as needed */
  cursor: pointer;
  position: relative;
  font-weight: bold;
}

.nav-link::after {
  content: '';
  display: block;
  margin-top: 5px;
  height: 2px;
  background-color: transparent;
  transition: background-color 0.3s;
}

.nav-link.active::after {
  background-color: green; /* Green line for active tab */
}

  </style>
</head>
<body>
    @extends('layouts.master')
  @include('includes.nav')

  <div class="container">
    <div class="header">
      <h2>Input Data Peserta</h2>
    </div>
    <div class="nav-tabs">
      <div class="nav-link active" data-target="data-peserta">Data Peserta</div>
      <div class="nav-link" data-target="alamat">Alamat</div>
      <div class="nav-link" data-target="ubah-password">Ubah Password</div>
    </div>
    <div class="content">
      <div class="profile" id="data-peserta">
        <div class="profile-img"></div>
        <div class="profile-info">
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Masukkan username">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Masukkan email">
          <label for="nama-lengkap">Nama Lengkap</label>
          <input type="text" id="nama-lengkap" placeholder="Masukkan nama lengkap">
          <label for="no-telepon">No Telepon</label>
          <input type="text" id="no-telepon" placeholder="Masukkan no telepon">
          <label for="tanggal-lahir">Tanggal Lahir</label>
          <input type="date" id="tanggal-lahir">
          <button type="button">Ubah</button>
        </div>
      </div>
      <div class="form-section" id="alamat">
        <h2>Alamat</h2>
        <label for="alamat">Alamat Lengkap</label>
        <textarea id="alamat" rows="5" placeholder="Masukkan alamat lengkap"></textarea>
        <label for="kota">Kota</label>
        <input type="text" id="kota" placeholder="Masukkan kota">
        <label for="kode-pos">Kode Pos</label>
        <input type="text" id="kode-pos" placeholder="Masukkan kode pos">
        <button type="button">Simpan</button>
      </div>
      <div class="form-section" id="ubah-password">
        <h2>Ubah Password</h2>
        <label for="password-lama">Password Lama</label>
        <input type="password" id="password-lama" placeholder="Masukkan password lama">
        <label for="password-baru">Password Baru</label>
        <input type="password" id="password-baru" placeholder="Masukkan password baru">
        <label for="konfirmasi-password">Konfirmasi Password</label>
        <input type="password" id="konfirmasi-password" placeholder="Konfirmasi password baru">
        <button type="button">Simpan</button>
      </div>
    </div>
  </div>
  <script>
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.form-section');

    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        navLinks.forEach(l => l.classList.remove('active'));
        link.classList.add('active');

        sections.forEach(section => {
          if (section.id === link.dataset.target) {
            section.style.display = 'block';
          } else {
            section.style.display = 'none';
          }
        });
      });
    });

    // Set initial section display
    sections.forEach(section => {
      section.style.display = 'none';
    });
    document.getElementById('data-peserta').style.display = 'block';
  </script>
</body>
</html>
