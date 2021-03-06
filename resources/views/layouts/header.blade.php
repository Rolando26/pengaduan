<style>
body {
    font-size: .875rem;
  }
  
  .feather {
    width: 16px;
    height: 16px;
    vertical-align: text-bottom;
  }
  
  /*
   * Sidebar
   */
  
  .sidebar {
    position: fixed;
    top: 0;
    /* rtl:raw:
    right: 0;
    */
    bottom: 0;
    /* rtl:remove */
    left: 0;
    z-index: 100; /* Behind the navbar */
    padding: 48px 0 0; /* Height of navbar */
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
  }
  
  @media (max-width: 767.98px) {
    .sidebar {
      top: 5rem;
    }
  }
  
  .sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: .5rem;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
  }
  
  .sidebar .nav-link {
    font-weight: 500;
    color: #333;
  }
  
  .sidebar .nav-link .feather {
    margin-right: 4px;
    color: #727272;
  }
  
  .sidebar .nav-link.active {
    color: #007bff;
  }
  
  .sidebar .nav-link:hover .feather,
  .sidebar .nav-link.active .feather {
    color: inherit;
  }
  
  .sidebar-heading {
    font-size: .75rem;
    text-transform: uppercase;
  }
  
  /*
   * Navbar
   */
  
  .navbar-brand {
    padding-top: .75rem;
    padding-bottom: .75rem;
    font-size: 1rem;
    background-color: rgba(0, 0, 0, .25);
    box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
  }
  
  .navbar .navbar-toggler {
    top: .25rem;
    right: 1rem;
  }
  
  .navbar .form-control {
    padding: .75rem 1rem;
    border-width: 0;
    border-radius: 0;
  }
  
  .form-control-dark {
    color: #fff;
    background-color: rgba(255, 255, 255, .1);
    border-color: rgba(255, 255, 255, .1);
  }
  
  .form-control-dark:focus {
    border-color: transparent;
    box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
  }

  body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset 1px 0 0 rgba(0, 0, 0, .1);
}

@media (max-width: 767.98px) {
  .sidebar {
    top: 5rem;
  }
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-left: 4px;
  color: #727272;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset 1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .navbar-toggler {
  top: .25rem;
  left: 1rem;
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}


  </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div>
      <ul class="nav flex-column">

        @include('sweetalert::alert')

        <li class="nav-item">
          <a class="nav-link" href="{{ route('kategori.index')}}">
            <i class="fa fa-list" aria-hidden="true"></i>
            Kategori
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('adminaspirasi.index')}}">
            <i class="fa fa-commenting-o" aria-hidden="true"></i>
            Aspirasi 
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            Admin
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('history') }}">
            <i class="fa fa-history" aria-hidden="true"></i>
            History Aspirasi
          </a>
        </li>

    

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
  
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
  
      <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard"><i class="fa fa-rocket" aria-hidden="true"></i> Aplikasi Pengaduan</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
            <form action="{{ url('logout') }} " method="POST">
              @csrf
              <button type="submit" class="btn btn-default btn-flat" style="color:whitesmoke"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Sign Out</button>
            </form>
          </li>
        </ul>
      </header>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
      </main>
    </div>
  </div>