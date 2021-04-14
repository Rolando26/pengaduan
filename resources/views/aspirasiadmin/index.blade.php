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
        <h1 class="h2">
          <i class="fa fa-commenting-o" aria-hidden="true"></i> Aspirasi Admin </h1>
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
              <th>ID</th>
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
                
                    <td>{{ $a->id }} </td>
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
                    <a href="{{ route('feedback',$a->id) }}" class="btn btn-primary"><i class="fa fa-info" style="padding-left:2px;padding-right:2px;"></i></a>
                    <a href="{{ route('aspirasiadmin.edit',$a->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="{{ route('aspirasiadmin.destroy',$a->id)}}" style="display:inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
                   <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
                <br>

                <label>Per Kategori</label>
                <select name="kategori" class="form-control">
                  <option value="null">-Pilih Kategori-</option>
                  @foreach($kategori as $k)
                  <option value="{{$k->id}}">{{$k->ket_kategori}}</option>
                  @endforeach
                </select>
                <br>

                <label for="penduduk">Penduduk</label>
                <select name="penduduk" class="form-control">
                    <option value="null">-Pilih Penduduk-</option>
                    @foreach($aspirasi as $a)
                    <option value="{{$a->id}}">{{$a->nik}}</option>
                    @endforeach
                </select>
                <br>
                <label for="Bulan">Bulan</label>
                <select name="bulan" class="form-control">
                    <option value="null">-Pilih Bulan-</option>
                    <option value="01">January</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
                <br>
                <button type="submit" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Submit</button>
                
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

