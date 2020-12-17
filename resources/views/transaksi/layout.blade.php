<!DOCTYPE html>
<html>
<head>
    <title>Lara Students</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@600&display=swap" rel="stylesheet">

</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary" style="border-radius: 0%">
    <div class="container">
        <a class="navbar-brand" href="#">Online Cashier</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="{{ route('transaksi.index') }}">Transaction</a>
                {{-- <a class="nav-link" href="{{ route('brand.index') }}">Brand</a>
                <a class="nav-link" href="{{ route('distributor.index') }}" tabindex="-1" aria-disabled="true">Distributor</a> --}}
                <a class="nav-item btn btn-warning button" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</nav>

<!-- End Navbar -->



    <div class="container">
        @yield('content')
    </div>
</body>
</html>
