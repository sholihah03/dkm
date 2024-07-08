<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/settings/ubahData.css') }}">
</head>
<body>

<div class="container">
    <h2>Ubah Data</h2>
    <form>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="Mardil13">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="mardi@gmail.com">

        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" placeholder="Nama Lengkap">

        <label for="telepon">No Telepon:</label>
        <input type="text" id="telepon" name="telepon" placeholder="No Telepon">

        <label for="tanggal">Tanggal Lahir:</label>
        <input type="date" id="tanggal" name="tanggal">

        <button type="submit">Simpan</button>
        {{-- <button type="button" class="cancel">Batal</button> --}}
        <a href="{{ route('settingAkun') }}" class="cancel-btn">
            <button type="button" class="cancel">Batal</button>
        </a>
    </form>
</div>

</body>
</html>

