@extends('layouts.header')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Detail Aspirasi</title>
    
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
        <h1 class="h2">Detail Aspirasi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
         
          </div>
        
        </div>
      </div>
      <form class="form-horizontal" action="#">
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>NIK</th>
                <th>{{ $aspirasi->nik}}</th>
              </tr>


              <tr>
                <th>Kategori</th>
                <th>{{ $aspirasi->kategori->ket_kategori}}</th>
              </tr>

              <tr>
                <th>Aspirasi</th>
                <th>{{ $aspirasi->aspirasi}}</th>
              </tr>

              <tr>
                <th>Alamat</th>
                <th>{{ $aspirasi->alamat}}</th>
              </tr>

              <tr>
                <th>Feedback</th>
                <th>{{ $aspirasi->feedback}}</th>
        
              </tr>

              
              <tr>
                <th>Status</th>
                <th>      
                     @if($aspirasi->status == 'menunggu')
                    <span>Menunggu</span>

                  @elseif($aspirasi->status == 'proses')
                    <span>Proses</span>

                  @else
                   <span>Selesai</span>
                   
                  @endif</th>
              </tr>



            </table>
      </form>


    <script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

@endsection

