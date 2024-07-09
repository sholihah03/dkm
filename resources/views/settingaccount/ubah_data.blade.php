<div class="profile" id="data-peserta">
    <div class="profile-and-form">
        <!-- Profile Info -->
        <div class="profile-info">
            @include('settingaccount.ubah_profile')
        </div>
        <!-- Form Container -->
        <div class="form-container">
            <div class="form-header">
                <h2>Ubah Data Peserta</h2>
                <a href="#" id="edit-data-link" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a>
            </div>
            <form>
                <label for="username">Username:</label>
                {{-- <input type="text" id="username" name="username" value="{{ $user->username ?? 'N/A' }}"> --}}
                <input type="text" name="username" placeholder="Tambahkan Username" value="{{ $user->username ?? '' }}" disabled>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Tambahkan Email" value="{{ $user->email ?? '' }}" disabled>

                <label for="fullname">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Tambahkan Nama Lengkap" value="{{ $user->nama_lengkap ?? '' }}" disabled>

                <label for="phone">No Telepon:</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="Tambahkan No Telepon" value="{{ $user->no_telepon ?? '' }}" disabled>

                <label for="birthday">Tanggal Lahir:</label>
                <input type="text" id="tgl_lahir" name="tgl_lahir" placeholder="Tambahkan Tanggal Lahir" value="{{ $user->tgl_lahir ?? '' }}" disabled>
            </form>
        </div>

        {{-- <div class="form-container">
            <div class="form-header">
                <h2>Ubah Data Peserta</h2>
                <a href="#" id="edit-data-link" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a>
            </div>
            <div>
                <p><strong>Username:</strong> {{ $user->username ?? 'N/A' }}</p>
                <p><strong>Email:</strong> {{ $user->email ?? 'N/A' }}</p>
                <p><strong>Nama Lengkap:</strong> {{ $user->nama_lengkap ?? 'N/A' }}</p>
                <p><strong>No Telepon:</strong> {{ $user->no_telepon ?? 'N/A' }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $user->tgl_lahir ?? 'N/A' }}</p>
            </div>
            <button id="open-popup-btn">Edit Data</button>
        </div> --}}


        {{-- <div class="form-container">
            <div class="form-header">
                <h2>Ubah Data Peserta</h2>
                <a href="#" id="edit-data-link" class="edit-link">Ubah <img src="{{ asset('image/pencil.png') }}" alt="Edit" class="edit-icon"></a>
            </div>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="{{ $user->username ?? '' }}">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email ?? '' }}">

                <label for="fullname">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Tambahkan Nama Lengkap" value="">

                <label for="phone">No Telepon:</label>
                <input type="text" id="no_telepon" name="no_telepon" placeholder="Tambahkan No Telepon" value="">

                <label for="birthday">Tanggal Lahir:</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Tambahkan Tanggal Lahir" value="">
            </form>
        </div> --}}

    </div>
</div>
