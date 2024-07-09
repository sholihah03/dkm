<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/settings/ubahAlamat.css') }}">
</head>
<body>

<div class="container-alamat">
    <span class="close-btn-alamat">&times;</span>
    <form action="{{ isset($alamat) ? route('updateAlamat', ['id' => $alamat->id_alamat]) : route('tambahAlamat') }}" method="POST">
        @csrf
        @if (isset($alamat))
            @method('PUT')
        @endif
        <label for="alamat_lengkap">Keterangan Tempat</label>
        <textarea id="alamat_lengkap" name="alamat_lengkap" rows="5" placeholder="Tambahkan Keterangan Tempat dan Nama Jalan Alamatmu">{{ $alamat->alamat_lengkap ?? '' }}</textarea>
        <label for="rt">RT/RW</label><br>
        <input type="text" id="rt" placeholder="RT" name="rt" value="{{ $alamat->rt ?? '' }}">
        <input type="text" id="rw" placeholder="RW" name="rw" value="{{ $alamat->rw ?? '' }}"><br>
        <label for="kelurahan">Kelurahan</label>
        <input type="text" id="kelurahan" name="kelurahan" placeholder="Tambahkan Nama Desa atau Kelurahan" {{ $alamat->kelurahan ?? '' }}>
        <label for="kabupaten">Kabupaten/Kota</label>
        <input type="text" id="kabupaten" name="kabupaten" placeholder="Tambahkan Nama Kabupaten atau Kota" {{ $alamat->kabupaten ?? '' }}>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" id="kecamatan" name="kecamatan" placeholder="Tambahkan Nama Kecamatan" {{ $alamat->kecamatan ?? '' }}>
        <label for="provinsi">Provinsi</label>
        <input type="text" id="provinsi" name="provinsi" placeholder="Tambahkan Nama Provinsi" {{ $alamat->provinsi ?? '' }}>

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

