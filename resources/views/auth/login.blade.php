@extends('templates.header')

@section('content')
<link href="{{ asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">

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

<form action="{{ route('login') }}" method="POST">
    @csrf
{{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

<div class="form-floating">
  <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
  <label for="floatingInput">Username</label>
</div>

<br>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
  <label for="floatingPassword">Password</label>
</div>

<br>
<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
</form>
@endsection
