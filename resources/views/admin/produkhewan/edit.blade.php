<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <title>Edit Produk Hewan</title>
</head>
<body id="page-top">
    <div id="wrapper">
        @include('admin.sidebar')
        @include('admin.header')
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Edit Produk Hewan</h1>
            <form action="{{ route('produkhewan.update', $produkhewan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama Produk</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $produkhewan->name }}" required>
                </div>
                <div class="form-group">
                    <label for="price">Harga Produk</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ $produkhewan->price }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Produk</label>
                    @if($produkhewan->image)
                        <p><img src="{{ asset('storage/' . $produkhewan->image) }}" alt="Produk Image" width="100"></p>
                    @endif
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
