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
                <a href="#" id="edit-data-link" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a>
            </div>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="">

                <label for="fullname">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Tambahkan Nama Lengkap" value="">

                <label for="phone">No Telepon:</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="Tambahkan No Telepon" value="">

                <label for="birthday">Tanggal Lahir:</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Tambahkan Tanggal Lahir" value="">
            </form>
        </div>
    </div>
</div>
