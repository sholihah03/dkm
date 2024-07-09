<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <title>Tambah Produk Hewan</title>
</head>

<body id="page-top">
    <div id="wrapper">
        @include('admin.sidebar')
        @include('admin.header')
        <div class="container-fluid">
            <h1 class="h3 mb-4 text-gray-800">Tambah Produk Hewan</h1>
            <form action="{{ route('produkhewan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
    <div class="form-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="price">Harga Produk</label>
        <input type="number" name="price" id="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="image">Gambar Produk</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('produkhewan') }}" class="btn btn-secondary">Kembali</a>
</form>
