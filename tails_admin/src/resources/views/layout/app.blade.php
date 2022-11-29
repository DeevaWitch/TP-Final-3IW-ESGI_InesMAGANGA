<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tails Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
        <div class="nav">
            <!-- mettre un logo (?) -->
            <nav>
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/categories')}}">Categories</a></li>
                    <li><a href="{{url('/types')}}">Types</a></li>
                    <li><a href="{{url('/products')}}">Products</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
</body>
</html>