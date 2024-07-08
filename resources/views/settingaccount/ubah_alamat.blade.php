<div class="profile" id="alamat" style="display:none;">
    <div class="profile-and-form-alamat">
        <!-- Form Container -->
        <div class="form-container-alamat">
            <div class="form-header-alamat">
                <h2>Alamat</h2>
                <a href="#" id="edit-alamat-link" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a>
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
            </form>
        </div>
    </div>
</div>
