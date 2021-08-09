<html>

<head>
    <title>Restaurant App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
        footer{
            position: absolute;
    background: #f8f9fa;
    width: 100%;
    padding: 20px;
        }
        .main-div{
            min-height: 580px;
        }
    </style>

</head>

<body>
    <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="/">Resto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/list">List</a>
      <a class="nav-item nav-link" href="/add">Add</a>
      <a class="nav-item nav-link" href="#">Search</a>
      @if(Session::get('user'))
      <a class="nav-item nav-link" href="#">Hello, {{Session::get('user')}}</a>
      <a class="nav-item nav-link" href="logout">Logout</a>
      @else
      <a class="nav-item nav-link" href="/login">Login</a>
      <a class="nav-item nav-link" href="/register">Register</a>
     
      @endif
       <!-- <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
    </div>
  </div>
</nav>
    </header>
    <div class="main-div">
    <div class="container">
        @yield('content')
    </div>
    </div>
</body>
<footer>
    Copy Right by Neeru
</footer>

</html>