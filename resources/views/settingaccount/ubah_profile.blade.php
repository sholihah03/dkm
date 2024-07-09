<div class="imgProfil">
    <div class="imgUser">
        <div class="cImg">
            <img src="{{asset('image/layer.png')}}" style="width: 200px; height: 200px;" alt="" class="object-cover object-center">
        </div>

        {{-- <div class="profile-image" style="pointer-events: none;">
            @if(session('user_profile_url_' . Auth::user()->idUser))
                <img id="profilePicture" src="{{ session('user_profile_url_' . Auth::user()->idUser) }}" alt="Profile Picture">
            @else
                <img id="profilePicture" src="{{ asset('images/profil1.png') }}" alt="Default Profile Picture">
            @endif
        </div> --}}
    </div>
    <div class="chooseImg">
        <button type="button">Pilih Profil</button>
    </div>
    <div class="warningChsImg">
        <p>Ekstensi file yang diperbolehkan : JPG, PNG, JPEG</p>
    </div>
</div>


{{--
<div class="user-profile">
    <div class="photoprofile">
        <div class="profile-image" style="pointer-events: none;">
            @if(session('user_profile_url_' . Auth::user()->idUser))
            <img id="profilePicture" src="{{ session('user_profile_url_' . Auth::user()->idUser) }}" alt="Profile Picture">
            @else
                <img id="profilePicture" src="{{ asset('images/profil1.png') }}" alt="Default Profile Picture">
            @endif
        </div>
    </div>
    <!-- Formulir untuk Unggah Foto -->
    <form action="{{ route('updateFotoProfil') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="profil" accept="image/*" id="fileInput" style="display: none;" onchange="updateProfilePicture(this)">
        <button type="button" class="btn" onclick="document.getElementById('fileInput').click()">
            Ganti Foto
        </button>
        <button type="submit" class="btn" style="background-color: #4C6687; color: #fcf2c5;">
            Upload Foto
        </button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    function updateProfilePicture(input) {
        if (input.files && input.files[0]) {
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                // Memperbarui gambar profil secara langsung dengan gambar yang dipilih
                document.getElementById('profilePicture').src = e.target.result;
            };

            // Membaca file yang dipilih sebagai URL data
            reader.readAsDataURL(file);

            var formData = new FormData();
            formData.append('profil', file);

            // Mengirim file ke server menggunakan AJAX
            axios.post("/profil/update-foto", formData, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                }
            })
            .then(response => {
                // Memperbarui gambar profil dengan respons server setelah pengunggahan berhasil
                document.getElementById('profilePicture').src = response.data.url + '?' + new Date().getTime();
            })
            .catch(error => {
                console.error('Error uploading profile picture:', error);
            });
        }
    }


    // Menambahkan listener untuk mengupdate gambar ketika ada perubahan pada input file
    document.getElementById('fileInput').addEventListener('change', function() {
        updateProfilePicture(this);
    });
</script> --}}
