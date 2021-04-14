<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <meta name="generator" content="Hugo 0.82.0">
    <title></title>


    
    <!-- Bootstrap core CSS -->
<link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    @stack('style')
    <style>

                /*
        * Globals
        */


        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        }


        /*
        * Base structure
        */

        body {
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
        max-width: 42em;
        }


        /*
        * Header
        */

        .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
        }

        .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
        }


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
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  
  <header class="mb-auto">
    <div>
      
      <h3 class="float-md-end mb-3"> <a href="{{ route('login') }}" style="text-decoration:none; color: #ffffff;">PelaporanMasyarakat</h3> </a>
      <nav class="nav nav-masthead justify-content-center float-md-start">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/" style="margin-left:30px;">Home</a>
        <a class="nav-link  {{ Request::is('about') ? 'active' : '' }}" aria-current="page" href="/about" style="margin-left:30px;">About US</a>
        <a class="nav-link {{ Request::is('historyaspirasi') ? 'active' : '' }}" aria-current="page" href="/historyaspirasi" style="margin-left:30px;">History</a>
       
     
      </nav>
    </div>
  </header>
  
  @include('sweetalert::alert')
  @yield('content')


  @include('templates/footer')