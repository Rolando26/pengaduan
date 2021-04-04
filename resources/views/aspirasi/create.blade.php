@extends('templates/header')

@section('content')

@include('templates.feedback')
<main class="px-3">
    <form action="{{ route('aspirasi.store') }}" method="POST"> 
        @csrf
        @if (session('success')) 
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error')) 
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <br>
        <div class="form-group">
          <label for="nik">NIK</label>
          <input type="text" class="form-control" placeholder="Masukkan NIK" name="nik">
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
                <option>--- Pilh Kategori --- </option>
                @foreach($kategori as $a)
                    <option value="{{ $a->id }}">{{ $a->ket_kategori }}</option>
                @endforeach
            </select>
          </div>
          <br>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
          </div>
          <br>
          <div class="form-group">
            <label>Aspirasi</label>
            <input type="text" class="form-control" name="aspirasi" placeholder="Masukkan Aspirasi">
          </div>
          <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('/') }}" class="btn btn-info">Kembali</a>
      </form>   
</main>
@endsection


