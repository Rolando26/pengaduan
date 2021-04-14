@extends('templates/header')

@section('content')
<main class="px-3">
    <h1>
       Aplikasi Pelaporan Masyarakat
    </h1>
    <p class="lead">
        

        <p><b style="color:red;font-size:20px;">Data Anda Sudah Masuk Kedalam Sistem Kami. Terima Kasih</b></p>
    </p>
    <p class="lead">
        <a href="{{ route('aspirasi.create')}}" class="btn btn-danger btn-lg">Lapor</a>
        <br>
        <br>
        <a href="/" class="btn btn-primary btn-lg" style="padding: 8px; 10px; 8px; 10px;">Kembali</a>
    </p>
</main>

@endsection