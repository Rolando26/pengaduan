@extends('layouts.header')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Kategori</title>

    
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
        <h1 class="h2"> <i class="fa fa-tags"></i> Kategori</h1>
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
    

             <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
              
              <div class="form-group">
                <label for="ket_kategori">Keterangan Kategori</label>
                <input type="text" class="form-control" placeholder="Masukkan Kategori" name="ket_kategori">
              </div>
              
              <br>
              <a href="{{ route('kategori.index') }}" class="btn btn-info" style="color:white;"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Kembali</a>
              <button type="submit" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Submit</button>
            </form>


    <script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

@endsection

