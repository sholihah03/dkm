<div class="profile" id="alamat" style="display:none;">
    <div class="profile-and-form-alamat">
        <!-- Form Container -->
        <div class="form-container-alamat">
            <div class="form-header-alamat">
                <h2>Alamat</h2>
                <a href="#" id="edit-alamat-link" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a>
            </div>
            <form>
                <label for="alamat_lengkap">Keterangan Tempat</label>
                <textarea id="alamat_lengkap" name="alamat_lengkap" rows="5" placeholder="Tambahkan Keterangan Tempat dan Nama Jalan Alamatmu" disabled>{{ $alamat->alamat_lengkap ?? '' }}</textarea>

                <label for="rt">RT/RW</label>
                <input type="text" id="rt" name="rt" placeholder="RT" value="{{ $alamat->rt ?? '' }}" disabled>

                <input type="text" id="rw" name="rw" placeholder="RW" value="{{ $alamat->rw ?? '' }}" disabled>

                <label for="kelurahan">Kelurahan</label>
                <input type="text" id="kelurahan" name="kelurahan" placeholder="Tambahkan Nama Desa atau Kelurahan" value="{{ $alamat->kelurahan ?? '' }}" disabled>

                <label for="kabupaten">Kabupaten/Kota</label>
                <input type="text" id="kabupaten" name="kabupaten" placeholder="Tambahkan Nama Kabupaten atau Kota" value="{{ $alamat->kabupaten ?? '' }}" disabled>

                <label for="kecamatan">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" placeholder="Tambahkan Nama Kecamatan" value="{{ $alamat->kecamatan ?? '' }}" disabled>

                <label for="provinsi">Provinsi</label>
                <input type="text" id="provinsi" name="provinsi" placeholder="Tambahkan Nama Provinsi" value="{{ $alamat->provinsi ?? '' }}" disabled>
            </form>

        </div>
    </div>
</div>
