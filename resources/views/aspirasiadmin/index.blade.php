@extends('layouts.header')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Aspirasi Admin</title>

    
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
        <h1 class="h2">Aspirasi Admin</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
         
          </div>
        
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr align="center">
              <th>No</th>
              <th>NIK</th>
              <th>Status</th>
              <th>Kategori</th>
              <th>Alamat</th>
              <th>Aspirasi</th>
              <th>Action</th>
            
            </tr>
          </thead>

          <tbody align="center">
            @foreach ($aspirasi as $a)

            <tr>
                    <td>{{ $no++ }} </td>
                    <td>{{ $a->nik }} </td>
                    <td>
                      @if($a->status == 'menunggu')
                        <span>Menunggu</span>

                      @elseif($a->status == 'proses')
                        <span>Proses</span>

                      @else
                       <span>Selesai</span>
                       
                      @endif
                    </td>
                    <td>{{ $a->kategori->ket_kategori }} </td>
                    <td>{{ $a->alamat }} </td>
                    <td>{{ $a->aspirasi }} </td>
              
                <td>
                  <a href="{{ route('aspirasiadmin.edit',$a->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('feedback',$a->id) }}" class="btn btn-primary">Detail</a>
                  <form action="{{ route('aspirasiadmin.destroy',$a->id)}}" style="display:inline" method="POST">
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>              
            </tr>

            @endforeach

          </tbody>

              
          <form action="/admin/aspirasi" method="POST">
            @csrf
            <div class="table-responsive">
    
            <table class="table table-striped table-sm">
              
              <input type="hidden" value=true name="cari">
                <div class="form-group">
                   <label>Per Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
                <br>

                <label>Per Kategori</label>
                <select name="kategori" class="form-control">
                  @foreach($kategori as $k)
                  <option value="{{$k->id}}">{{$k->ket_kategori}}</option>
                  @endforeach
                </select>
                <br>
                <button type="submit" class="btn btn-success">Submit</button>
                
                </div>
            </table>
            
            </div>
        </form>


        </table>
      </div>
   


    <script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

@endsection

