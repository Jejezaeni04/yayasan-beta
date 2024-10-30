<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .text-container {
    text-align: left;
}
  .bank-list img {
      width: 40px;
      margin-right: 15px;
    }
    .bank-item {
      display: flex;
      align-items: center;
      padding: 15px;
      border-bottom: 1px solid #ddd;
    }
    .modal-footer {
      justify-content: center;
    }
   .footer {
      background-color: #0A3D72;
      color: white;
      padding: 40px 0;
      text-align: center;
    }
    .footer h2 {
      font-size: 24px;
      font-weight: bold;
      color: #FFC107;
      margin-bottom: 10px;
    }
    .footer p {
      font-size: 16px;
      margin-bottom: 20px;
    }
    .social-icons a {
      color: white;
      font-size: 24px;
      margin: 0 10px;
      text-decoration: none;
    }
    .social-icons a:hover {
      color: #FFC107;
    }
      .gallery-container {
      text-align: center;
      margin-top: 20px;
    }
    .gallery-item img {
      width: 100%;
      height: auto;
    }
    .copyright {
      text-align: center;
      margin-top: 20px;
    }
    .whatsapp-icon {
      position: fixed;
      bottom: 20px;
      right: 20px;
      font-size: 36px;
      color: green;
    }
      .programs-section {
            background: linear-gradient(to right, #562B7C, #2D89C3);
            color: #fff;
            padding: 50px 0;
        }
        .program-card {
            background-color: #fff;
            color: #333;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .program-card img {
            width: 100%;
            height: auto;
        }
        .program-card .card-body {
            padding: 20px;
        }
        .program-card h5 {
            font-size: 18px;
            font-weight: bold;
        }
        .program-card p {
            font-size: 14px;
        }
        .btn-donate {
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 0;
            padding: 10px;
            text-align: center;
            display: block;
            width: 100%;
        }
   .hero-section {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #FFFFFF; /* Sesuaikan warna latar */
            padding: 50px;
        }
        .hero-section img {
            max-width: 300px; /* Sesuaikan ukuran gambar */
            border-radius: 10px;
        }
        .hero-text {
            margin-left: 20px;
        }
        .hero-text h1 {
            font-size: 24px;
            font-weight: bold;
            color: #000;
        }
        .hero-text p {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }

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
        <!-- Bagian lain jika diperlukan -->
    </div>
    <div class="text-container text-start">
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
        <a class="read-moreclass" data-toggle="modal" data-target="#kataPengantarModal">Baca Selengkapnya▾</a>
    </div>
</div>


          <div class="carousel-item">
          <div class="text-center">
            <h2>Akta Notaris</h2>
            <img src="{{ url('image/contoh-akta.png') }}" alt="Akta Notaris" class="card-img-top centered-img" style="max-width: 600px;">
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
            <img src="{{ url('image/anggota.png') }}" alt="Anggota Pengurus" class="card-img-top centered-img" style="max-width: 600px;"  data-bs-toggle="modal" data-bs-target="#teamModal">
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


            <div class="carousel-item">
         <div class="container">
                <!-- Title Section with Image -->
                <div class="row align-items-center">
                  <!-- Image Section -->
                  <div class="col-md-4 text-center">
                    <img src="{{ url('image/duta-budaya.png') }}" alt="Duta Budaya Sunda" class="img-fluid" style="max-width: 50%; height: auto;">
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
                      <img src="{{ url('image/participant1.png') }}" alt="Nama Peserta" class="card-img-top mx-auto centered-img" style="max-width: 40%; height: auto;">
                      <div class="card-body">
                        <p class="card-text">Nama Peserta</p>
                        <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;" data-bs-toggle="modal" data-bs-target="#allContestantsModal">VOTE</button>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Participant 2 -->
                  <div class="col-md-4">
                    <div class="card text-center">
                      <img src="{{ url('image/participant2.png') }}" alt="Nama Peserta" class="card-img-top mx-auto centered-img" style="max-width: 40%; height: auto;">
                      <div class="card-body">
                        <p class="card-text">Nama Peserta</p>
                        <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;"  data-bs-toggle="modal" data-bs-target="#allContestantsModal">VOTE</button>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Participant 3 -->
                  <div class="col-md-4">
                    <div class="card text-center">
                      <img src="{{ url('image/participant2.png') }}" alt="Nama Peserta" class="card-img-top mx-auto centered-img" style="max-width: 40%; height: auto;">
                      <div class="card-body">
                        <p class="card-text">Nama Peserta</p>
                        <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;"  data-bs-toggle="modal" data-bs-target="#allContestantsModal">VOTE</button>
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
    
 <div class="container hero-section">
        <img src="{{ url('image/gita.png') }}" alt="Gambar Sambutan">
        <div class="hero-text">
            <p>Wilujeung Sumping di website yayasan</p>
            <h1>Gita Cahaya Karsa Putri Pasundan</h1>
        </div>
    </div>

   
    
<!-- Programs Section -->
    <section class="programs-section">
        <div class="container">
            <h2 class="text-start mb-5">Program Kami</h2>
            <div class="row">
                <!-- Program 1 -->
                <div class="col-md-4 mb-4">
                    <div class="program-card">
                        <img src="image/program3.png" alt="Program 1">
                        <div class="card-body">
                            <h5>Program Jum'at Berkah untuk manusia gerobak dan pemulung</h5>
                            <p>Program Bulanan</p>
                            <p>Sedekah Rp15.000 Anda, Harapan Baru bagi mereka</p>
                            <a href="#" class="btn btn-donate btn-primary "type="button"  data-toggle="modal" data-target="#donasiModal">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Program 2 -->
                <div class="col-md-4 mb-4">
                    <div class="program-card">
                        <img src="image/program2.png" alt="Program 2">
                        <div class="card-body">
                            <h5>Program TK Al-Quran untuk mereka yang membutuhkan</h5>
                            <p>Program Bulanan</p>
                            <p>Yuk, Sedekah jariyah untuk setiap ilmu yang mereka dapat, terdapat pahalanya di dalam nya</p>
                            <a href="#" class="btn btn-donate btn-primary "type="button"  data-toggle="modal" data-target="#donasiModal">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Program 3 -->
                <div class="col-md-4 mb-4">
                    <div class="program-card">
                        <img src="image/program1.png" alt="Program 3">
                        <div class="card-body">
                            <h5>Program kasih makan kucing jalanan</h5>
                            <p>Program Bulanan</p>
                            <p>Mereka juga makhluk Tuhan sama seperti kita</p>
                            <a href="#" class="btn btn-donate btn-primary "type="button"  data-toggle="modal" data-target="#donasiModal">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <div class="container gallery-container">
    <h2 class="text-start mb-5">Gallery Kegiatan</h2>
    <div class="row">
      <!-- Repeat this col-md-4 for each gallery item -->
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <!-- Copy above divs for each image -->
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <!-- Add more items as needed -->
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
      <div class="col-md-4 gallery-item">
        <div class="card">
          <img src="image/program3.png" alt="Gallery Item" class="card-img-top">
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">
    <p>&copy;2024. gitacahayakarsa.com </p>
  </div>

  <a href="https://wa.me/your-number" class="whatsapp-icon">
    <img src="image/whatsapp.png" alt="WhatsApp" style="max-width: 80px;">
  </a>

  <footer class="footer">
    <div class="container">
      <h2>Gita Cahaya Karsa Putri Pasundan</h2>
      <p>Slogan here</p>
      <div class="social-icons">
        <a href="#" target="_blank"><i class="fab fa-google"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <div class="modal fade" id="donasiModal" tabindex="-1" aria-labelledby="donasiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="donasiModalLabel">Donasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="bank-list">
          <!-- Bank Items -->
          <div class="bank-item">
            <img src="image/mandiri.png" alt="Bank Mandiri Logo">
            <span class="btn btn-gl"  data-toggle="modal" data-target="#bankMandiriModal">Bank Mandiri</span>
          </div>
          <div class="bank-item">
            <img src="image/bca.png" alt="Bank BCA Logo">
            <span class="btn btn-gl"  data-toggle="modal" data-target="#bankMandiriModal">Bank BCA</span>
          </div>
          <div class="bank-item">
            <img src="image/bni.png" alt="Bank BNI Logo">
            <span class="btn btn-gl"  data-toggle="modal" data-target="#bankMandiriModal">Bank BNI</span>
          </div>
          <div class="bank-item">
            <img src="image/bri.png" alt="Bank BRI Logo">
            <span class="btn btn-gl"  data-toggle="modal" data-target="#bankMandiriModal">Bank BRI</span>
          </div>
          <div class="bank-item">
            <img src="image/bsi.png" alt="Bank BSI Logo">
            <span class="btn btn-gl"  data-toggle="modal" data-target="#bankMandiriModal">Bank BSI</span>
          </div>
          <div class="bank-item">
            <img src="image/permata.png" alt="Bank Permata Logo">
            <span class="btn btn-gl"  data-toggle="modal" data-target="#bankMandiriModal">Bank Permata</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="bankMandiriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bank Mandiri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <img src="image/mandiri.png" alt="Bank Mandiri Logo" style="max-width: 100px;">
          <h6 class="mt-3">No. Rekening:</h6>
          <h3><strong>1320023455141</strong></h3>
          <button class="btn btn-outline-secondary btn-sm" onclick="copyToClipboard()">Salin</button>
        </div>
        <hr>
        <h6>Petunjuk Pembayaran</h6>
        <ol>
          <li>Buka aplikasi Livin'.</li>
          <li>Pilih menu "Transfer".</li>
          <li>Pilih jenis transfer (baru, terjadwal, favorit).</li>
          <li>Isi detail penerima (nama, nomor rekening).</li>
          <li>Masukkan nominal transfer.</li>
          <li>Konfirmasi transfer.</li>
          <li>Masukkan PIN atau otorisasi tambahan.</li>
          <li>Selesai.</li>
        </ol>
        <a href="#" class="text-primary">Baca Selengkapnya</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Script to Copy Account Number -->
<script>
  function copyToClipboard() {
    const accountNumber = "1320023455141";
    navigator.clipboard.writeText(accountNumber).then(function() {
      alert("Nomor rekening berhasil disalin!");
    }, function(err) {
      alert("Gagal menyalin nomor rekening");
    });
  }
</script>


<div class="modal fade" id="kataPengantarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kata Pengantar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Assalamualaikum warahmatullahi wabarakatuh,</p>
        <p>Salam sejahtera, Namo buddhaya, Om swastiastu, Salam kebajikan. Sapa rumpaka.</p>
        
        <p>Berbekal pengalaman pengalaman perjalanan hidup yang apa adanya, dimana saya bertemu orang-orang penting di jalanan saya menggali dan langsung berproses mencari dingin dan lapar.</p>
        
        <p>Saya terinspirasi untuk bergiatkan melayani merdeka dengan memberi sarapan, makan siang, dan makan sore secara gratis.</p>
        
        <p>Tidak mudah menjalankan ini, mengingat keterbatasan yang ada, namun berbekal keyakinan yang dalam di dada,</p>
        
        <blockquote class="blockquote">
          <p>"Mereka diberi rezeki dari yang ingin Allah berikan kepada mereka, maka mereka merasa puas dengan rezeki tersebut yang diberikannya, dan mereka merasa puas pula dengan tambahan dari Tuhan mereka: Sesungguhnya mereka berada dalam kaum yang tidak merasa takut (atas sesuatu) dan mereka tidak bersedih hati."</p>
          <footer class="blockquote-footer">Surah Al-Baqarah (2) ayat 177</footer>
        </blockquote>
        
        <p>Saya melangkah dan bergerak untuk ini, tidak terlepas hanya itu.</p>
        
        <p>Setiap Allah SWT juga bergerak nasibnya, di bidang sosial penduduk, keamanan dan keamanan utama.</p>
        
        <p>Doanya untuk kita semua yang sejahtera. Dan apa yang kita banggakan hari kelahiran dan keselamatan juga agar.</p>
        
        <p>Semoga Allah Subhana wataala. Sedia merendahkan utusan kita semua.</p>
        
        <p>Hormat saya, salam sejahtera kami serta ada semua.</p>
        
        <p><strong>GITA CAHAYA KARSA PUTRI PASUNDAN</strong></p>
        
        <hr>
        
        <p class="text-right">
          Cq: TTD <br>
          GITA SEKAR CINDEWANGI
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModalLabel">Team Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container text-center">
                        <!-- First Member -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <img src="image/sekar.png" class="img-fluid" alt="Gita Sekar Cindewangi" style="max-width: 50%;">
                                <h5>Gita Sekar Cindewangi</h5>
                                <p>Ketua Pengurus Yayasan</p>
                            </div>
                        </div>
                        <!-- Second Member -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <img src="image/andita.png" class="img-fluid" alt="Andita Restiani Rahma Putri" style="max-width: 50%;">
                                <h5>Andita Restiani Rahma Putri</h5>
                                <p>Bendahara Yayasan</p>
                            </div>
                        </div>
                        <!-- Third Member -->
                        <div class="row mb-4">
                            <div class="col-12">
                                <img src="image/novi.png" class="img-fluid" alt="Novi Oktaviani" style="max-width: 30%;">
                                <h5>Novi Oktaviani</h5>
                                <p>Sekretaris Yayasan</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="allContestantsModal" tabindex="-1" aria-labelledby="allContestantsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="allContestantsModalLabel">All Contestants</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row text-center">
                            <!-- Contestant 1 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="image/participant2.png" class="card-img-top" alt="Nama Peserta 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Peserta</h5>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contestant 2 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="image/participant2.png" class="card-img-top" alt="Nama Peserta 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Peserta</h5>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contestant 3 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="image/participant2.png" class="card-img-top" alt="Nama Peserta 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Peserta</h5>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contestant 4 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="image/participant2.png" class="card-img-top" alt="Nama Peserta 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Peserta</h5>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contestant 5 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="image/participant2.png" class="card-img-top" alt="Nama Peserta 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Peserta</h5>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Contestant 6 -->
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="image/participant2.png" class="card-img-top" alt="Nama Peserta 6">
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Peserta</h5>
                                        <button type="button" class="btn btn-primary">Vote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="modal-title" id="putriPasundanLabel">ANDAKAH PUTRI PASUNDAN ITU?</h5>
                    <p>Bila anda terlahir dari salah seorang tua berdarah sunda, baik ayah maupun ibu,</p>
                    <p>Bila anda terlahir dan tinggal di tanah pasundan tercinta,</p>
                    <p>Bila anda menghabiskan lebih dari setengah usia anda di tataran pasundan,</p>
                    <p>Bila anda mengeyam pendidikan, salah satu jenjang pendidikan berikut, s ma, D3, S1, S2, di tanah pasundan,</p>
                    <p>Bila anda memahami dan menguasai bahasa sunda, musik sunda, sejarah sunda, budaya sunda, dengan baik,</p>
                    
                    <p>Ikut <strong>DUTA YAYASAN GITA CAHAYA KARSA PUTRI PASUNDAN</strong>....</p>
                    
                    <p>dan dapatkan, bingkisan penghargaan kami yang menarik, dari mulai seperangkat alat sholat, kesempatan kursus memasak, kursus kecantikan, kursus menjahit, kursus kepribadian, alat rias rumah tangga, hingga kesempatan umroh * (syarat dan ketentuan berlaku)</p>
                    
                    <p>Putri Pasundan yang terpilih berdasarkan penilaian masyarakat luas pengunjung website <a href="http://www.gitacahayakarsapp.com">www.gitacahayakarsapp.com</a></p>
                    
                    <p>Daftar segera dengan mengirimkan data diri anda dengan format pendaftaran</p>
                    <p><a href= "#"data-bs-toggle="modal" data-bs-target="#registrasiModal">(klik disini)</a> kirim melalui email <a href="mailto:yayasangitacahayakarsa@gmail.com">yayasangitacahayakarsa@gmail.com</a></p>
                    <p>Salam hormat dan sayang,</p>
                    <p><strong>GITA SEKAR CINDEWANGI</strong></p>
                </div>
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registrasiModal" tabindex="-1" aria-labelledby="registrasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrasiModalLabel">
                    <i class="bi bi-pencil-square"></i> Format Registrasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Basic Information Fields -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" id="pendidikan" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tinggiBadan" class="form-label">Tinggi Badan</label>
                        <input type="text" class="form-control" id="tinggiBadan" required>
                    </div>
                    <div class="mb-3">
                        <label for="beratBadan" class="form-label">Berat Badan</label>
                        <input type="text" class="form-control" id="beratBadan" required>
                    </div>

                    <!-- Knowledge Levels -->
                    <div class="mb-3">
                        <label class="form-label">Penguasaan Bahasa Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasaSunda" id="bahasaKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="bahasaKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasaSunda" id="bahasaPaham" value="Paham">
                            <label class="form-check-label" for="bahasaPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasaSunda" id="bahasaFasih" value="Fasih">
                            <label class="form-check-label" for="bahasaFasih">Fasih</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kebudayaan Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kebudayaanSunda" id="kebudayaanKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="kebudayaanKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kebudayaanSunda" id="kebudayaanPaham" value="Paham">
                            <label class="form-check-label" for="kebudayaanPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kebudayaanSunda" id="kebudayaanSangatPaham" value="Sangat Paham">
                            <label class="form-check-label" for="kebudayaanSangatPaham">Sangat Paham</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Musik Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musikSunda" id="musikKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="musikKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musikSunda" id="musikPaham" value="Paham">
                            <label class="form-check-label" for="musikPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musikSunda" id="musikSangatPaham" value="Sangat Paham">
                            <label class="form-check-label" for="musikSangatPaham">Sangat Paham</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pengetahuan Sejarah Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sejarahSunda" id="sejarahKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="sejarahKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sejarahSunda" id="sejarahPaham" value="Paham">
                            <label class="form-check-label" for="sejarahPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sejarahSunda" id="sejarahSangatPaham" value="Sangat Paham">
                            <label class="form-check-label" for="sejarahSangatPaham">Sangat Paham</label>
                        </div>
                    </div>

                    <!-- Media Instructions -->
                    <div class="mb-3">
                        <p><strong>Media</strong></p>
                        <ol>
                            <li>Foto terbaik Anda mengenakan busana kebaya</li>
                            <li>Video perkenalan diri dengan minimal durasi 15 detik</li>
                        </ol>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Link to Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
