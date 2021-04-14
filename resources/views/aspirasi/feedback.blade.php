@extends('templates/header')

@section('content')

@include('templates.feedback')
<main class="px-3">
    <form action="/aspirasi/ubahfeedback/{{ $aspirasi->id }}" method="POST"> 
      @csrf
      <table class="table table-stripped text-white">
        <tr>
          <th>ID</th>
          <th>{{ $aspirasi->id}}</th>
        </tr>

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
          @if($aspirasi->status == 'selesai' && $aspirasi->feedback == null)
            <th>Feedback :</th> 
            <th><input type="text" class="form-control" name="feedback"> </th>

          @else
          <th>Feedback</th> 
          <th>{{ $aspirasi->feedback}}</th>
          @endif
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
      @if($aspirasi->status == 'selesai' && $aspirasi->feedback == null)
      <a href="/" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Kembali</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Submit</button>
      @else

      <a href="/" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Kembali</a>

      @endif
      </form>   
</main>
@endsection


