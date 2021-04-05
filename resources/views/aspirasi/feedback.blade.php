@extends('templates/header')

@section('content')

@include('templates.feedback')
<main class="px-3">
    <form action="/aspirasi/ubahfeedback/{{ $aspirasi->id }}" method="POST"> 
      @csrf
      <table class="table table-stripped text-white">
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
        @if($aspirasi->status == 'selesai')
        <th>Feedback</th>
        @if($aspirasi->feedback == 'puas')
      
          <th>Puas</th>

          @elseif($aspirasi->feedback == 'tidakpuas')
          <th>Tidak Puas</th>

          @else
          <th>Beri Feedback:
            <select name="feedback" class="form-control">
              <option value="puas">Puas</option>
              <option value="tidakpuas">Tidak Puas</option>
            </select>
          </th>
          @endif
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
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="/" class="btn btn-primary">Kembali</a>
      @else

      <a href="/" class="btn btn-primary">Kembali</a>

      @endif
      </form>   
</main>
@endsection


