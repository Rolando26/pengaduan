@extends('templates/header')

@section('content')
<main class="px-3">
    <h1>
       Aplikasi Pelaporan Masyarakat
    </h1>
    <p class="lead">
        <p>Cari Data Pengaduan :</p>

        <form action="/aspirasi/cari" method="POST" class='form-inline float-right mb-3'>
            @csrf
                <input type="text" class="form-control" placeholder='Cari ID..' name='search'>
            <br>
                <button type="submit" class="btn btn-primary btn-lg" style="padding:7px 25px; 7px; 25px;">Cari</button>
        </form>
    </p>
    <p class="lead">
        <a href="{{ route('aspirasi.create')}}" class="btn btn-danger btn-lg">Lapor</a>
        
    </p>
</main>

@endsection