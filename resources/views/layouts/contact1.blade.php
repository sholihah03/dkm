<!-- resources/views/layouts/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Kontak Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

@extends('layouts.master')
@include('includes.nav')

<div class="container d-flex flex-column align-items-center">
    <h1>Kontak Kami</h1>
    <p>Anda dapat menghubungi kami melalui platform berikut</p>
    <ul class="list-unstyled">
    <li class="contact-item mb-3">
        <ul>
            <li><a href="https://wa.me/1234567890" target="_blank"><i class="bi bi-whatsapp"></i>WhatsApp</a></li>
            <li><a href="mailto:info@yourdomain.com"><i class="bi bi-envelope-at-fill"></i> email@gmail.com</a></li>
            <li><i class="bi bi-geo-alt-fill"></i> Jalan Contoh No. 123, Kota, Negara</li>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
