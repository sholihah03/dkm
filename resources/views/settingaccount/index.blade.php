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

    @include('settingaccount.ubah_data')

    @include('settingaccount.ubah_alamat')

    @include('settingaccount.ubah_password')

    <div id="edit-data-popup" class="popup">
        <div class="popup-content">
            @include('settingaccount.edit_ubah_data')
        </div>
    </div>

    <div id="edit-alamat-popup" class="popup">
        <div class="popup-content">
            @include('settingaccount.edit_ubah_alamat')
        </div>
    </div>

    <script src="{{ asset('js/popup_ubah_data.js') }}"></script>
    {{-- <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('.form-section, .profile');
        const dataPesertaSection = document.getElementById('data-peserta');
        const alamatSection = document.getElementById('alamat');
        const editDataLink = document.getElementById('edit-data-link');
        const editAlamatLink = document.getElementById('edit-alamat-link');
        const editDataPopup = document.getElementById('edit-data-popup');
        const editAlamatPopup = document.getElementById('edit-alamat-popup');
        const closeBtns = document.querySelectorAll('.close-btn');

        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');

                if (link.dataset.target === 'data-peserta') {
                    dataPesertaSection.style.display = 'block';
                } else {
                    dataPesertaSection.style.display = 'none';
                }

                if (link.dataset.target === 'alamat') {
                    alamatSection.style.display = 'block';
                } else {
                    alamatSection.style.display = 'none';
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
            e.preventDefault();
            editDataPopup.style.display = 'block';
        });

        editAlamatLink.addEventListener('click', (e) => {
            e.preventDefault();
            editAlamatPopup.style.display = 'block';
        });

        // Sembunyikan popup saat tombol "Tutup" di klik
        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                btn.closest('.popup').style.display = 'none';
            });
        });

        // Set initial section display
        sections.forEach(section => {
            section.style.display = 'none';
        });
        dataPesertaSection.style.display = 'block';
    </script> --}}
</body>
</html>
