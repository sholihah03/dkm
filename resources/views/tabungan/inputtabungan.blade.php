<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Tabungan</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/input.css') }}">
</head>
<body>
    @extends('layouts.master')
    @include('includes.nav')
<div class="container mt-4">
    <div class="row mb-3">
        <div class="col-12">
            <h4 class="text-left bg-light-green p-2">Input Data Tabungan</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/images/sapi limosin..jpg')}}" alt="Sapi Limosin">
            <p><b>Sapi Limosin</b></p>
            <p>34.000.000/Ekor</p>
            <p>Berat: 1 Ton</p>
        </div>
        <div class="col-md-6">
            <div class="bg-light-green p-4 rounded">
                <form>
                    <div class="form-group">
                        <label for="awalWaktuTabungan">Awal Waktu Tabungan</label>
                        <input type="date" class="form-control" id="awalWaktuTabungan" value="04/07/2024" readonly>
                    </div>
                    <div class="form-group">
                        <label for="targetWaktuTabungan">Target Waktu Tabungan</label>
                        <input type="date" class="form-control" id="targetWaktuTabungan" value="04/07/2026" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlahCicilan">Jumlah Cicilan/Bulan</label>
                        <input type="text" class="form-control" id="jumlahCicilan" value="Rp. 709.000" readonly>
                    </div>
                    <div class="form-group">
                        <label for="noRekening">No. Rekening</label>
                        <input type="text" class="form-control" id="noRekening" value="134xxxxxxxxx" readonly>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Kembali Ke Beranda</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
