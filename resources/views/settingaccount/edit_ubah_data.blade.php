<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/settings/ubahData.css') }}">
</head>
<body>

<div class="container-data">
    <span class="close-btn-data">&times;</span>
    <form>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="">

        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="">

        <label for="telepon">No Telepon:</label>
        <input type="text" id="no_telepon" name="no_telepon" placeholder="No Telepon" value="">

        <label for="tanggal">Tanggal Lahir:</label>
        <input type="date" id="tgl_lahir" name="tgl_lahir" value="">

        <button type="submit">Simpan</button>
        {{-- <button type="button" class="cancel">Batal</button> --}}
        {{-- <a href="{{ route('settingAkun') }}" class="cancel-btn">
            <button type="button" class="cancel">Batal</button>
        </a> --}}
    </form>
</div>

<script>
    document.querySelector('.close-btn-data').addEventListener('click', function() {
        // document.querySelector('.container-data').style.display = 'none';
        window.location.href = "{{ route('settingAkun') }}";
    });
</script>
</body>
</html>

