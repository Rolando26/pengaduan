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
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

  </head>
  <body>
    

      @section('content')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
            <i class="fa fa-tags" aria-hidden="true"></i> Kategori</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="{{ route('kategori.create') }}" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true">&nbsp;Tambah</i></a>
          </div>
        
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr align="center">
              <th>No</th>
              <th>ID</th>
              <th>Keterangan Kategori</th>
              <th>Action</th>
            
            </tr>
          </thead>
          <tbody align="center">
            @if($kategori->count() > 0)
              @foreach($kategori as $k)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $k->id }}</td>
                <td>{{ $k->ket_kategori }}</td>
                <td>
                  <a href="{{ route('kategori.edit',$k->id) }}" class="btn btn-warning">
                    <i class="fa fa-pencil"></i></a>
                   

                  <form action="{{ route('kategori.destroy',$k->id)}}" style="display:inline" method="POST">
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
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

@endsection

