<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <title>Produk Hewan</title>
</head>
<body id="page-top">
    <div id="wrapper">
        @include('admin.sidebar')
        @include('admin.header')
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Daftar Produk Hewan</h1>
            <a href="{{ route('produkhewan.create') }}" class="btn btn-primary mb-4">Tambah Produk</a>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Gambar Produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produkhewan as $produk)
                        <tr>
                            <td>{{ $produk->id }}</td>
                            <td>{{ $produk->name }}</td>
                            <td>{{ $produk->price }}</td>
                            <td>
                                @if($produk->image)
                                    <img src="{{ asset('storage/' . $produk->image) }}" alt="Produk Image" width="100">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('produkhewan.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('produkhewan.destroy', $produk->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
