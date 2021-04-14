@extends('templates/header')

@section('content')

@include('templates.feedback')

    {{-- menampilkan error validasi --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<main class="px-3">


    <form action="{{ route('aspirasi.store') }}" method="POST"> 
        @csrf

        <br>
        <div class="form-group">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik" required>
        </div>
        <br>
        <div class="form-group">
          <label for="Status">Status</label>
          <select name="status" class="form-control">
              <option value="menunggu">Menunggu</option>
          </select>
        </div>
        <br>
        <div class="form-group">
            <label for="Kategori">Kategori</label>
            <select name="kategori_id" class="form-control">
                <option value="null">--- Pilh Kategori --- </option>
                @foreach($kategori as $a)
                    <option value="{{ $a->id }}">{{ $a->ket_kategori }}</option>
                @endforeach
            </select>
          </div>
          <br>
          
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required>
          </div>

        <br>
        

          <div class="form-group">
            <label>Aspirasi</label>
            <input type="text" class="form-control" name="aspirasi" placeholder="Masukkan Aspirasi" required>
          </div> 
          <br>
    
          
        <a href="{{ url('/') }}" class="btn btn-info" style="color:white;"><i class="fa fa-chevron-left" aria-hidden="true"></i>&nbsp;Kembali</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Submit</button>
      </form>   
</main>
@endsection


