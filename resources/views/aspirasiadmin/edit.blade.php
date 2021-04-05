@extends('layouts.header')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Edit Aspirasi</title>

    
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">

    <style>
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>
    

      @section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ganti Status Aspirasi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
           
          </div>
        
        </div>
      </div>
      {{-- body --}}
              {{-- Menampilkan Error Validasi --}}
              @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                       @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                       @endforeach
                  </ul>
              </div>
             @endif
        <form action="{{ route('aspirasiadmin.update',$aspirasi->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="NIK">NIK</label> 
            <input type="text" class="form-control" name="nik" value="{{ $aspirasi->nik }}" readonly>
        </div>

        <br>

        <div class="form-group">
          <label for="ket_kategori">Kategori</label>
          <select name="kategori_id" class="form-control" readonly>
              <option value="{{ $aspirasi->kategori_id}}">{{ $aspirasi->kategori->ket_kategori}}</option>
          </select>
        </div>

        <br>
        
        <div class="form-group">
          <label for="Alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" value="{{ $aspirasi->alamat }}" readonly>
        </div>

        <br>

        <div class="form-group">
            <label for="Status">Status</label>
            <select name="status" class="form-control">
                <option value="menunggu" {{ $aspirasi->status == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                <option value="proses" {{ $aspirasi->status == 'proses' ? 'selected' : '' }}>Proses</option>
                <option value="selesai" {{ $aspirasi->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
          </div>
  

        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('adminaspirasi.index') }}" class="btn btn-info">Kembali</a>
      </form>


    <script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

@endsection

