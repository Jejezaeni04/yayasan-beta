<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .calendar-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      background-color: #fff;
    }
    .calendar-header {
      font-weight: bold;
      font-size: 1.25rem;
      margin-bottom: 15px;
    }
    .calendar-days {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 8px;
      margin-bottom: 15px;
    }
    .day {
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      font-weight: bold;
    }
    .day.red {
      background-color: #dc3545;
      color: white;
    }
    .day.blue {
      background-color: #0d6efd;
      color: white;
    }
  </style>
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
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="8" aria-label="Slide 9"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="9" aria-label="Slide 10"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="10" aria-label="Slide 11"></button>
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
           
            </div>
            <div class="text-container text-center">
                <h2>Kata pengantar</h2>
                <div class="intro">
                  <p>Assalamualaikumwarramatullah wabarakatuh.</p>
                  <p>Salam sejahtera.</p>
                  <p>Namo budhaya</p>
                  <p>Oom santi santi oom</p>
                  <p>Salam kebajikan.</p>
                  <p>Sampurasun</p>
                </div>
                <p>Berbekal penggalan pengalaman perjalanan hidup yang saya alami, dimana saya bertemu seorang pemulung yang badan nya menggigil dan mulutnya bergemerutuk, menahan dingin dan lapar.</p>
                <p>Saya terinspirasi untuk berkegiatan melayani mereka dengan memberi sarapan, makan siang, dan makan malam nantinya.</p>
                <p>Tidak mudah mewujudkan itu, mengingat keterbatasan yang ada, namun berbekal keyakinan yang ada, dan berdasar.</p>
                <a class="read-more" href="#">Baca Selengkapnya▾</a>
            </div>
          </div>

          <div class="carousel-item">
          <div class="text-center">
            <h2>Akta Notaris</h2>
            <img src="{{ url('image/contoh-akta.png') }}" alt="Akta Notaris" class="card-img-top centered-img" style="max-width: 600px;">
          </div>
         </div>



         <div class="carousel-item">
         <div class="container">
                <!-- Title Section with Image -->
                <div class="row align-items-center">
                  <!-- Image Section -->
                  <div class="col-md-4 text-center">
                    <img src="{{ url('image/duta-budaya.png') }}" alt="Duta Budaya Sunda" class="img-fluid" style="max-width: 60%; height: auto;">
                  </div>
                  <!-- Text Section -->
                  <div class="col-md-8 text-center text-md-start">
                    <h2 style="color: #6C2EA7;">Jadilah duta budaya Sunda!</h2>
                    <p>Mojang Priangan, tunjukkan kecantikan dan kecerdasanmu! Daftar sekarang di Pemilihan Putri Pasundan dan menangkan hadiah menarik!</p>
                  </div>
                  
                </div>

                <!-- Participants Section -->
                <h4 class="text-center">Pemilihan Putri Pasundan Bulan Oktober</h4>
                
                <div class="row">
                  <!-- Participant 1 -->
                  <div class="col-md-4">
                    <div class="card text-center ">
                      <img src="{{ url('image/participant1.png') }}" alt="Nama Peserta" class="card-img-top mx-auto centered-img" style="max-width: 50%; height: auto;">
                      <div class="card-body">
                        <p class="card-text">Nama Peserta</p>
                        <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;">VOTE</button>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Participant 2 -->
                  <div class="col-md-4">
                    <div class="card text-center">
                      <img src="{{ url('image/participant2.png') }}" alt="Nama Peserta" class="card-img-top mx-auto centered-img" style="max-width: 50%; height: auto;">
                      <div class="card-body">
                        <p class="card-text">Nama Peserta</p>
                        <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;">VOTE</button>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Participant 3 -->
                  <div class="col-md-4">
                    <div class="card text-center">
                      <img src="{{ url('image/participant2.png') }}" alt="Nama Peserta" class="card-img-top mx-auto centered-img" style="max-width: 50%; height: auto;">
                      <div class="card-body">
                        <p class="card-text">Nama Peserta</p>
                        <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;">VOTE</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              </div>

              <div class="carousel-item">
              <div class="container">
  <!-- Section Title -->
  <h2 class="text-center">Saran dan Komentar</h2>

  <!-- User Comment Box -->
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-center">
        <!-- User Icon -->
        <div class="user-icon">
          <img src="{{ url('image/icons/user-icon.png') }}" alt="User Icon" style="width: 40px; height: 40px; object-fit: cover;">
        </div>
        <div class="ms-3">
          <p class="mb-1 fw-bold">User</p>
          <p class="mb-1 fw-bold" style="font-size: 1.1rem;">Sangat luar biasa</p>
          <p class="mb-1 text-muted">Agustus 2024</p>
        </div>
      </div>
      <p class="mt-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices augue.
      </p>
      <a href="#" class="text-primary">Tampilkan Selengkapnya</a>
    </div>
  </div>

  <!-- Response Box -->
  <div class="card mb-4">
    <div class="card-body">
      <p class="fw-bold">YAYASAN GITA CAHAYA KARSA PUTRI PASUNDAN</p>
      <p class="text-muted">Agustus 2024</p>
      <p>Terimakasih atas komentar anda</p>
    </div>
  </div>

  <!-- Add Comment Button -->
  <div class="text-center">
    <button class="btn btn-primary" style="background-color: #003366; border: none;">Tulis Saran dan Komentar</button>
  </div>
</div>

</div>







         <div class="carousel-item">
          <div class="text-center">
            <h2>Surat Keterangan</h2>
            <img src="{{ url('image/contoh-sk.png') }}" alt="Surat Keterangan" class="card-img-top centered-img" style="max-width: 600px;">
          </div>
         </div>
                  
          
         <div class="carousel-item">
          <div class="text-center">
            <h2>Anggota Pengurus</h2>
            <img src="{{ url('image/anggota.png') }}" alt="Anggota Pengurus" class="card-img-top centered-img" style="max-width: 600px;">
          </div>
         </div>


         
          
         <div class="carousel-item">
         <div class="container text-center">
            <h2>Dokumentasi Peresmian</h2>
            <h4>CONTOH</h4>

            <div class="row">
              <div class="col-12">
                <img src="{{ url('image/peresmian1.png') }}" alt="Dokumentasi Peresmian 1" class="card-img-top centered-img" style="max-width: 35%; height: auto;">
              </div>
              <div class="col-12">
                <img src="{{ url('image/peresmian2.png') }}" alt="Dokumentasi Peresmian 2" class="card-img-top centered-img" style="max-width: 35%; height: auto;">
              </div>
            </div>
          </div>
          </div>

          <div class="carousel-item">
              <div class="container text-center">
                <h2>Dokumentasi Kegiatan Pertama</h2>
                <h4>CONTOH</h4>

                <div class="row">
                  <!-- Row 1 -->
                  <div class="col-4">
                    <img src="{{ url('image/peresmian1.png') }}" alt="Dokumentasi Peresmian 1" class="card-img-top centered-img" style="max-width: 100%; height: auto;">
                  </div>
                  <div class="col-4">
                    <img src="{{ url('image/peresmian1.png') }}" alt="Dokumentasi Peresmian 1" class="card-img-top centered-img" style="max-width: 100%; height: auto;">
                  </div>
                  <div class="col-4">
                    <img src="{{ url('image/peresmian1.png') }}" alt="Dokumentasi Peresmian 1" class="card-img-top centered-img" style="max-width: 100%; height: auto;">
                  </div>
                </div>

                <div class="row mt-3">
                  <!-- Row 2 -->
                  <div class="col-4">
                    <img src="{{ url('image/peresmian1.png') }}" alt="Dokumentasi Peresmian 1" class="card-img-top centered-img" style="max-width: 100%; height: auto;">
                  </div>
                  <div class="col-4">
                    <img src="{{ url('image/peresmian1.png') }}" alt="Dokumentasi Peresmian 1" class="card-img-top centered-img" style="max-width: 100%; height: auto;">
                  </div>
                  <div class="col-4">
                    <img src="{{ url('image/peresmian1.png') }}" alt="Dokumentasi Peresmian 1" class="card-img-top centered-img" style="max-width: 100%; height: auto;">
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
                <div class="container text-center">
                  <h2>Kegiatan Jumat Berkah</h2>
                  
                  <!-- Image Section -->
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      <img src="{{ url('image/peresmian1.png') }}" alt="Kegiatan Jumat Berkah" class="img-fluid" style="width: 100%; height: auto;">
                    </div>
                  </div>

                  <!-- Description Section -->
                  <div class="row mt-4">
                    <div class="col-md-10 mx-auto text-justify">
                      <p>
                        Pengadaan nasi kotak untuk setiap hari JUMAT BAROKAH, tiap nasi kotak senilai lima belas ribu rupiah, dan diperuntukan kepada sebanyak sembilan puluh sembilan penerima, demikian untuk keseluruhan nasi kotak tersebut dibutuhkan dana sebesar satu juta empat ratus ribu delapan puluh lima ribu rupiah, belum termasuk biaya mengangkut keseluruhan kotak nasi tersebut ke tempat tujuan, dan biaya untuk tenaga pekerja pembawa dan pembagi nasi kotak tersebut, demikian perkiraan dana yang dibutuhkan untuk tiap kegiatan JUMAT BAROKAH, dengan membagikan sebanyak sembilan puluh sembilan nasi kotak tersebut kepada penerima yang membutuhkan, termasuk biaya transport yang dibutuhkan untuk membawa jumlah nasi kotak tersebut beserta tenaga pekerja yang membagikan kepada yang membutuhkan, keseluruhan nya untukkan atas nilai ..........
                      </p>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Additional Slides can be added here following the same format -->
              <div class="carousel-item ">
              <div class="container text-center">
              <h2>Kegiatan Jumat Berkah</h2>
              <div class="calendar-container">
                <div class="calendar-header">September</div>
                <div class="calendar-days text-muted">
                  <div>Mo</div>
                  <div>Tu</div>
                  <div>We</div>
                  <div>Th</div>
                  <div>Fr</div>
                  <div>Sa</div>
                  <div>Su</div>
                </div>
                <div class="calendar-days">
                  <div class="day"></div><div class="day"></div><div class="day"></div><div class="day"></div>
                  <div class="day">1</div><div class="day">2</div><div class="day">3</div><div class="day">4</div>
                  <div class="day red">5</div><div class="day">6</div><div class="day">7</div><div class="day">8</div>
                  <div class="day">9</div><div class="day">10</div><div class="day">11</div><div class="day red">12</div>
                  <div class="day">13</div><div class="day">14</div><div class="day">15</div><div class="day">16</div>
                  <div class="day">17</div><div class="day blue">18</div><div class="day">19</div><div class="day">20</div>
                  <div class="day">21</div><div class="day">22</div><div class="day">23</div><div class="day red">26</div>
                </div>
                <div class="progress-container mt-4">
                  <div class="fw-bold">Rp.900.000 dari Rp.1.500.000</div>
                  <div class="progress mt-2" style="height: 10px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="900000" aria-valuemin="0" aria-valuemax="1500000"></div>
                  </div>
                </div>
              </div>
              </div>
            </div>
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
