<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Discussion Forum</title>

  <!-- Bootstrap core CSS -->
<link href="{{ asset('/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="{{ asset('/css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/clean-blog.min.css')}}" rel="stylesheet">

  

</head>

<body>

  <!-- Navigation -->
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right text-light" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'text-info' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/about') ? 'text-info' : '' }}" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/contact') ? 'text-info' : '' }}" href="contact.html">Contact</a>
          </li>
                        <!-- Authentication Links -->

          @guest
          <li class="nav-item">
          <a class="nav-link {{ Request::is('login') ? 'text-info' : '' }}" href="{{ asset('login')}}">Login</a>
          </li>
          @if (Route::has('register'))

          <li class="nav-item">
            <a class="nav-link {{ Request::is('register') ? 'text-info' : '' }}" href="{{ asset('register')}}">Register</a>
          </li>
          @endif
          @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is('createPost') ? 'text-info' : '' }}" href="/createPost">Create Post</a>
          </li>

          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/usersPosts">
                    {{ __('My Posts') }}
                </a>
                <hr>
                <a class="dropdown-item" href="/categories">
                  {{ __('Categories') }}
              </a>
              <hr>
              <a class="dropdown-item mb-2 text-danger" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>

          </li> 
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
  <!-- Footer -->
  <footer>
  <hr>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://twitter.com/"  target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Discussion Forum 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/js/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('/js/clean-blog.min.js')}}"></script>

</body>

</html>