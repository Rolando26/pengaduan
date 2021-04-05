@extends('layouts.header')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>User Admin</title>

    
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
        <h1 class="h2">User Admin</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
           
          </div>
        
        </div>
      </div>
      {{-- body --}}

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

      <form action="{{ route('users.store') }}" method="POST">
          @csrf
        
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" placeholder="Masukkan Nama" name="name" value="{{ old('name')}}">
        </div>
        
        <br>

        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Masukkan Username" name="username" value="{{ old('username')}}">
         </div>
               
        <br>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Masukkan Password" name="password" value="{{ old('password') }}">
         </div>
               
        <br>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('users.index') }}" class="btn btn-info">Kembali</a>
      </form>


    <script src="{{ asset('assets')}}/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

@endsection

