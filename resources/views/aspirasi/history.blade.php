@extends('templates/header')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>History Aspirasi</title>
    
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
        <h1 class="h2">
            <i class="fa fa-history" aria-hidden="true"></i> History Aspirasi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
         
          </div>
        
        </div>
      </div>
      <div class="table-responsive" style="color:white">
        <table class="table table-striped table-sm" style="color:white">
          <thead>
            <tr align="center">
              <th>No</th>
              <th>NIK</th>
              <th>Kategori</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Feedback</th>
              <th>Aspirasi</th>
          
            
            </tr>
          </thead>

          <tbody align="center" style="color:white">
              @if($aspirasi->count() > 0)
            @foreach ($aspirasi as $a)

            <tr style="color:white">
                    <td>{{ $no++ }} </td>
                    <td>{{ $a->nik }} </td>
               
                    <td>{{ $a->kategori->ket_kategori }} </td>
                    <td>{{ $a->alamat }} </td>
                    <td>
                      @if($a->status == 'menunggu')
                        <span>Menunggu</span>

                      @elseif($a->status == 'proses')
                        <span>Proses</span>

                      @else
                       <span>Selesai</span>
                       
                      @endif
                    </td>


                    <td>
                      @if($a->feedback == 'puas')
                         <span>Puas</span>
                      @else
                        <span>Tidak Puas</span>
                      @endif
                    </td>

                    <td>{{ $a->aspirasi }} </td>
              
                </td>              
            </tr>

            @endforeach
            @else
                <tr>
                    <td colspan="6" style="color:red;"><b>Tidak Ada Data</b></td>
                </tr>
            @endif

          </tbody>

        </table>
      </div>
   


    <script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>

  </body>
</html>




</main>

@endsection