<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/settings/ubahAlamat.css') }}">
</head>
<body>

<div class="container-alamat">
    <span class="close-btn-alamat">&times;</span>
    <form>
        <label for="alamat">Keterangan Tempat</label>
        <textarea id="alamat" rows="5" placeholder="Tambahkan Keterangan Tempat dan Nama Jalan Alamatmu"></textarea>
        <label for="rt">RT/RW</label><br>
        <input type="text" id="rt" placeholder="RT">
        <input type="text" id="rw" placeholder="RW"><br>
        <label for="kelurahan">Kelurahan</label>
        <input type="text" id="kelurahan" placeholder="Tambahkan Nama Desa atau Kelurahan">
        <label for="kabupaten">Kabupaten/Kota</label>
        <input type="text" id="kabupaten" placeholder="Tambahkan Nama Kabupaten atau Kota">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" id="kecamatan" placeholder="Tambahkan Nama Kecamatan">
        <label for="provinsi">Provinsi</label>
        <input type="text" id="provinsi" placeholder="Tambahkan Nama Provinsi">

        <button type="submit">Simpan</button>
        {{-- <button type="button" class="cancel">Batal</button> --}}
        {{-- <a href="{{ route('settingAkun') }}" class="cancel-btn">
            <button type="button" class="cancel">Batal</button>
        </a> --}}
    </form>
</div>

<script>
    document.querySelector('.close-btn-alamat').addEventListener('click', function() {
        // document.querySelector('.container-alamat').style.display ='none';
        window.location.href = "{{ route('settingAkun') }}";
    });
</script>
</body>
</html>

