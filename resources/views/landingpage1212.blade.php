<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="{{url('image/yayasan.png')}}" type="image/x-icon">
  
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap-grid.css')}}" rel="stylesheet">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yayasan - Gita Cahaya Karsa Putri Pasundan</title>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-body-tertiary custom-navbar fixed-top ">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{url('image/yayasan.png')}}" alt="Logo" class="d-inline-block align-text-top" style="width: 60px; height: auto;">
                <div class="ms-2"> 
                    <h1 class="mb-0 fs-5">Yayasan</h1>
                    <h1 class="mb-0 fs-6">Gita Cahaya Karsa Putri Pasundan</h1> 
                </div>
            </a>
            @if (Route::has('login'))
            @auth
                @if (Auth::user()->is_admin)
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a>
                @else
                    <a href="{{ route('user.dashboard') }}" class="btn btn-primary">Dashboard</a>
                @endif
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            @endauth
        @endif
        
    </div>

  </nav>

    <div class="container" style="margin-top: 100px;">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="text-center">
                <img src="{{url('image/yayasan.png')}}" alt="Logo" class="card-img-top centered-img" style="max-width: 500px;">
            </div>
            
            {{-- <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div> --}}
        </div>
        
        
          <div class="carousel-item">
            <div class="text-center">
            <img src="{{url('image/img2.jpeg')}}" alt="Logo" class="card-img-top">
            </div>
            {{-- <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Some representative placeholder content for the second slide of the carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
              </div>
            </div> --}}
          </div>
          <div class="carousel-item">
            <div class="text-center">
            <img src="{{url('image/img3.jpeg')}}" alt="Logo" class="card-img-top">
            </div>
            {{-- <div class="container">
              <div class="carousel-caption text-end">
                <h1>One more for good measure.</h1>
                <p>Some representative placeholder content for the third slide of this carousel.</p>
                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
              </div>
            </div> --}}
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

      
      <div class="container-fluid p-5 text-start position-relative">

        <img src="{{ url('image/img11.jpeg') }}" alt="Background Image" class="img-fluid w-100" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
        <div class="row align-items-center">
            <div class="col-md-8 mx-auto">
                <h1 class="display-2 text-white font-weight-bold">Sedekah Rp3.000 Anda, Harapan Baru</h1>
                <p class="lead text-white">Berbagilah untuk mereka yang membutuhkan saat mereka kelaparan.</p>
                <button class="btn btn-lg btn-outline-light bg-primary">Donasi Sekarang</button>
            </div>
        </div>
        
    </div>

    <div class="container mt-lg-5">
      <div class="row">
        <div class="col">
          1 of 2
        </div>
        <div class="col">
          2 of 2
        </div>
      </div>
    </div>
    

</body>
</html>
