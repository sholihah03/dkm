<!DOCTYPE html>
<html>
<head>
    <title>Input Data Peserta</title>
    <link rel="stylesheet" href="{{ asset('css/settings/settings.css') }}">
</head>
<body>
    @extends('layouts.master')
    @include('includes.nav')

    <div class="header">
        <h2>Input Data Peserta</h2>
    </div>
    <div class="nav-tabs">
        <div class="nav-link active" data-target="data-peserta">Data Peserta</div>
        <div class="nav-link" data-target="alamat">Alamat</div>
        <div class="nav-link" data-target="ubah-password">Ubah Password</div>
    </div>

    <div class="profile" id="data-peserta">
        <div class="profile-and-form">
            <!-- Profile Info -->
            <div class="profile-info">
                <div class="imgProfil">
                    <div class="imgUser">
                        <div class="cImg">
                            <img src="{{asset('image/layer.png')}}" style="width: 200px; height: 200px;" alt="" class="object-cover object-center">
                        </div>
                    </div>
                    <div class="chooseImg">
                        <button type="button">Pilih Profil</button>
                    </div>
                    <div class="warningChsImg">
                        <p>Ekstensi file yang diperbolehkan : JPG, PNG, JPEG</p>
                    </div>
                </div>
            </div>
            <!-- Form Container -->
            <div class="form-container">
                <div class="form-header">
                    <h2>Ubah Data Peserta</h2>
                    {{-- <a href="{{ route('ubahData') }}" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a> --}}
                    <a href="#" id="edit-data-link" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a>
                </div>
                <form>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" value="Mardil13">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="mardi@gmail.com">

                    <label for="fullname">Nama Lengkap:</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Tambahkan Nama Lengkap">

                    <label for="phone">No Telepon:</label>
                    <input type="text" id="phone" name="phone" placeholder="Tambahkan No Telepon">

                    <label for="birthday">Tanggal Lahir:</label>
                    <input type="date" id="birthday" name="birthday" placeholder="Tambahkan Tanggal Lahir">
                </form>
            </div>
        </div>
    </div>

    <div class="profile" id="alamat" style="display:none;">
        <div class="profile-and-form-alamat">
            <!-- Form Container -->
            <div class="form-container-alamat">
                <div class="form-header-alamat">
                    <h2>Alamat</h2>
                    <a href="#" class="edit-link-alamat">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon-alamat"></a>
                </div>
                <form>
                    <label for="alamat">Keterangan Tempat</label>
                    <textarea id="alamat" rows="5" placeholder="Tambahkan Keterangan Tempat dan Nama Jalan Alamatmu"></textarea>
                    <label for="rt">RT/RW</label>
                    <input type="text" id="rt" placeholder="RT">
                    <input type="text" id="rw" placeholder="RW">
                    <label for="kelurahan">Kelurahan</label>
                    <input type="text" id="kelurahan" placeholder="Tambahkan Nama Desa atau Kelurahan">
                    <label for="kabupaten">Kabupaten/Kota</label>
                    <input type="text" id="kabupaten" placeholder="Tambahkan Nama Kabupaten atau Kota">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" id="kecamatan" placeholder="Tambahkan Nama Kecamatan">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" id="provinsi" placeholder="Tambahkan Nama Provinsi">
                    {{-- <button type="button">Ubah</button> --}}
                </form>
            </div>
        </div>
    </div>

    <div class="profile" id="ubah-password" style="display:none;">
        <div class="profile-and-form">
            <div class="form-container">
                <div class="form-header-ubahPW">
                    <h2>Ubah Password</h2>
                    {{-- <a href="#" class="edit-link-ubahPW">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon-ubahPW"></a> --}}
                </div>
                <form>
                    <label for="password-lama">Password Lama</label>
                    <input type="password" id="password-lama" placeholder="Masukkan password lama">
                    <label for="password-baru">Password Baru</label>
                    <input type="password" id="password-baru" placeholder="Masukkan password baru">
                    <label for="konfirmasi-password">Konfirmasi Password</label>
                    <input type="password" id="konfirmasi-password" placeholder="Konfirmasi password baru">
                    <button type="button">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    @include('settingaccount.edit_ubah_data')

    <script src="{{ asset('js/popup_ubah_data.js') }}"></script>

    {{-- <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.form-section, .profile');
        const dataPesertaSection = document.getElementById('data-peserta'); // Mendapatkan elemen data-peserta

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');

                if (link.dataset.target === 'data-peserta') {
                    dataPesertaSection.style.display = 'block'; // Menampilkan data-peserta
                } else {
                    dataPesertaSection.style.display = 'none'; // Menyembunyikan data-peserta jika bukan data-peserta yang di klik
                }

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
        dataPesertaSection.style.display = 'block'; // Menampilkan data-peserta pada awal
    </script> --}}
    <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.form-section, .profile');
        const dataPesertaSection = document.getElementById('data-peserta'); // Mendapatkan elemen data-peserta
        const editDataLink = document.getElementById('edit-data-link'); // Tombol "Ubah" pada form Data Peserta
        const dataPesertaForm = document.getElementById('data-peserta-form'); // Form Data Peserta

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');

                if (link.dataset.target === 'data-peserta') {
                    dataPesertaSection.style.display = 'block'; // Menampilkan data-peserta
                } else {
                    dataPesertaSection.style.display = 'none'; // Menyembunyikan data-peserta jika bukan data-peserta yang di klik
                }

                sections.forEach(section => {
                    if (section.id === link.dataset.target) {
                        section.style.display = 'block';
                    } else {
                        section.style.display = 'none';
                    }
                });
            });
        });

        // Tampilkan popup saat tombol "Ubah" di klik
        editDataLink.addEventListener('click', (e) => {
            e.preventDefault(); // Menghentikan aksi default dari tombol "Ubah"
            showPopup();
        });

        // Sembunyikan popup saat tombol "Batal" di klik
        document.querySelector('.cancel-btn').addEventListener('click', () => {
            hidePopup();
        });

        // Set initial section display
        sections.forEach(section => {
            section.style.display = 'none';
        });
        dataPesertaSection.style.display = 'block'; // Menampilkan data-peserta pada awal
    </script>
</body>
</html>
