<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{url('css/landingpage.css')}}" rel="stylesheet">

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
                  @if (Auth::user()->role === 'Admin')
                      <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Dashboard</a>
                  @elseif (Auth::user()->role === 'Kandidat')
                      <a href="" class="btn btn-primary">Dashboard</a>
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
        </div>
        
        <div class="carousel-item">
          <div class="text-center">
            
          </div>
          <div class="text-text text-start">
            <h2>Kata Pengantar</h2>
            <div class="intro">
              <p>Assalamualaikumwarramatullah wabarakatuh.</p>
              <p>Salam sejahtera.</p>
              <p>Namo Budhaya</p>
              <p>Oom Santi Santi Oom</p>
              <p>Salam kebajikan.</p>
              <p>Sampurasun</p>
            </div>
            <p>
               Berbekal penggalan pengalaman perjalanan hidup yang saya alami, dimana saya bertemu seorang pemulung yang
               badannya menggigil dan mulutnya bergemerutuk, menahan dingin dan lapar.
            </p>
            <p>
                Saya terinspirasi untuk berkegiatan melayani mereka dengan memberi sarapan, makan siang, dan makan malam nantinya.
            </p>
            <p>
                Tidak mudah mewujudkan itu, mengingat keterbatasan yang ada,  dan berdasar. <a class="read-more" data-toggle="modal" data-target="#kataPengantarModal">Baca Selengkapnya▾</a>
            </p>
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
                  <!-- Section Title -->
                  <h4 class="text-center mb-3" style="font-size: 1.5rem;">Saran dan Komentar</h4>

                  <!-- User Comment Box -->
                  <div class="card mb-2" style="font-size: 0.9rem;">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center">
                        <!-- User Icon -->
                        <div class="user-icon">
                          <img src="{{ url('image/icons/user-icon.png') }}" alt="User Icon" style="width: 30px; height: 30px; object-fit: cover;">
                        </div>
                        <div class="ms-2">
                          <p class="mb-1 fw-bold" style="font-size: 0.95rem;">User</p>
                          <p class="mb-1 fw-semibold" style="font-size: 0.95rem;">Sangat luar biasa</p>
                          <p class="mb-1 text-muted" style="font-size: 0.85rem;">Agustus 2024</p>
                        </div>
                      </div>
                      <p class="mt-2 mb-1" style="font-size: 0.85rem;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.
                      </p>
                      <a href="#" class="text-primary" style="font-size: 0.85rem;">Tampilkan Selengkapnya</a>
                    </div>
                  </div>

                  <!-- Response Box -->
                  <div class="card mb-3" style="font-size: 0.9rem;">
                    <div class="card-body p-3">
                      <p class="fw-bold mb-1" style="font-size: 0.95rem;">YAYASAN GITA CAHAYA KARSA PUTRI PASUNDAN</p>
                      <p class="text-muted mb-1" style="font-size: 0.85rem;">Agustus 2024</p>
                      <p class="mb-0" style="font-size: 0.85rem;">Terimakasih atas komentar anda</p>
                    </div>
                  </div>

                  <!-- Add Comment Button -->
                  <div class="text-center">
                    <button class="btn btn-primary btn-sm" style="background-color: #003366; border: none; font-size: 0.85rem; padding: 6px 12px;">Tulis Saran dan Komentar</button>
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
                <a href="#programKami" class="btn btn-lg btn-outline-light bg-primary">Donasi Sekarang</a>
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

    <div class="accordion" id="accordionExample">
  <!-- Anggota Pengurus Accordion Item -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Anggota Pengurus
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="text-center">
          <h2>Anggota Pengurus</h2>
          <img src="{{ url('image/anggota.png') }}" alt="Anggota Pengurus" class="card-img-top centered-img" style="max-width: 600px;" data-bs-toggle="modal" data-bs-target="#teamModal">
        </div>
        <div class="container">
          <!-- First Member -->
          <div class="row mb-1 align-items-center">
            <div class="col-md-4 text-center">
              <img src="image/sekar.png" class="img-fluid" alt="Gita Sekar Cindewangi" style="max-width: 80%;">
            </div>
            <div class="col-md-8">
              <h5>Gita Sekar Cindewangi</h5>
              <p>Ketua Pengurus Yayasan</p>
            </div>
          </div>
          <!-- Second Member -->
          <div class="row mb-1 align-items-center">
            
            <div class="col-md-8 text-center">
              <h5>Andita Restiani Rahma Putri</h5>
              <p>Bendahara Yayasan</p>
            </div>

            <div class="col-md-4 ">
              <img src="image/andita.png" class="img-fluid" alt="Andita Restiani Rahma Putri" style="max-width: 80%;">
            </div>
          </div>
          <!-- Third Member -->
          <div class="row mb-1 align-items-center">
            <div class="col-md-4 text-center">
              <img src="image/novi.png" class="img-fluid" alt="Novi Oktaviani" style="max-width: 60%;">
            </div>
            <div class="col-md-8">
              <h5>Novi Oktaviani</h5>
              <p>Sekretaris Yayasan</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Accordion Item #2 -->
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        Jadilah duta budaya Sunda!
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="container">
          <!-- Title Section with Image -->
          <div class="row align-items-center">
            <div class="col-md-4 text-center">
              <img src="{{ url('image/duta-budaya.png') }}" alt="Duta Budaya Sunda" class="img-fluid" style="max-width: 100%; height: auto;">
            </div>
            <div class="col-md-8 text-center text-md-start">
              <h2 style="color: #6C2EA7;">Jadilah duta budaya Sunda!</h2>
              <p>Mojang Priangan, tunjukkan kecantikan dan kecerdasanmu! Daftar sekarang di Pemilihan Putri Pasundan dan menangkan hadiah menarik!</p>
            </div>
          </div>

          <!-- Participants Section -->
          <h4 class="text-center mt-4">Pemilihan Putri Pasundan Bulan Oktober</h4>
          <div class="row">
            <!-- Participant 1 -->
            <div class="col-md-4">
              <div class="card text-center">
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
                  <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;" data-bs-toggle="modal" data-bs-target="#allContestantsModal">VOTE</button>
                </div>
              </div>
            </div>
            <!-- Participant 3 -->
            <div class="col-md-4">
              <div class="card text-center">
                <img src="{{ url('image/participant2.png') }}" alt="Nama Peserta" class="card-img-top mx-auto centered-img" style="max-width: 40%; height: auto;">
                <div class="card-body">
                  <p class="card-text">Nama Peserta</p>
                  <button class="btn btn-primary" style="background-color: #6C2EA7; border: none;" data-bs-toggle="modal" data-bs-target="#allContestantsModal">VOTE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Accordion Item #3 -->
  
</div>

    
<!-- Programs Section -->
    <section class="programs-section">
        <div class="container">
            <h2 class="text-start mb-5" id="programKami">Program Kami</h2>
            <div class="row">
                <!-- Program 1 -->
                <div class="col-md-4 mb-4">
                    <div class="program-card">
                        <img src="image/program3.png" alt="Program 1">
                        <div class="card-body">
                            <h5>Program Jum'at Berkah untuk manusia gerobak dan pemulung</h5>
                            <p>Program Bulanan</p>
                            <p>Sedekah Rp15.000 Anda, Harapan Baru bagi mereka</p>
                            <a class="btn btn-donate btn-primary" data-bs-toggle="modal" href="#donasiModal" role="button">Donasi Sekarang</a>
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
                            <a class="btn btn-donate btn-primary" data-bs-toggle="modal" href="#donasiModal" role="button">Donasi Sekarang</a>
                            
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
                            <a class="btn btn-donate btn-primary" data-bs-toggle="modal" href="#donasiModal" role="button">Donasi Sekarang</a>
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
  </div>

  <a href="https://wa.me/your-number" class="whatsapp-icon">
    <img src="image/whatsapp.png" alt="WhatsApp" style="max-width: 50px;">
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
    <div class="copyright">
    <p>&copy;2024. gitacahayakarsa.com </p>
     </div>
  </footer>

  <div class="modal fade" id="donasiModal" aria-hidden="true" aria-labelledby="donasiModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="donasiModalLabel">Donasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="bank-list">
            <!-- Bank Items -->
            <div class="bank-item">
              <img src="image/mandiri.png" alt="Bank Mandiri Logo">
              <button class="btn btn-gl" data-bs-target="#bank" data-bs-toggle="modal" data-bs-dismiss="modal">Bank Mandiri</button>
            </div>
            <div class="bank-item">
              <img src="image/bca.png" alt="Bank BCA Logo">
              <button class="btn btn-gl" data-bs-toggle="modal" data-bs-target="#bank" data-bs-dismiss="modal">Bank BCA</button>
            </div>
            <div class="bank-item">
              <img src="image/bni.png" alt="Bank BNI Logo">
              <button class="btn btn-gl" data-bs-toggle="modal" data-bs-target="#bank" data-bs-dismiss="modal">Bank BNI</button>
            </div>
            <div class="bank-item">
              <img src="image/bri.png" alt="Bank BRI Logo">
              <button class="btn btn-gl" data-bs-toggle="modal" data-bs-target="#bank" data-bs-dismiss="modal">Bank BRI</button>
            </div>
            <div class="bank-item">
              <img src="image/bsi.png" alt="Bank BSI Logo">
              <button class="btn btn-gl" data-bs-toggle="modal" data-bs-target="#bank" data-bs-dismiss="modal">Bank BSI</button>
            </div>
            <div class="bank-item">
              <img src="image/permata.png" alt="Bank Permata Logo">
              <button class="btn btn-gl" data-bs-toggle="modal" data-bs-target="#bank" data-bs-dismiss="modal">Bank Permata</button>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button> -->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="bank" aria-hidden="true" aria-labelledby="exampleModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bank Mandiri</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
          <button class="btn btn-primary" data-bs-target="#donasiModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>
  <!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#donasiModal" role="button">Open first modal</a> -->

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
                                    <img src="image/participant1.png" class="card-img-top" alt="Nama Peserta 3">
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
                    <p><a href= "#" >(klik disini)</a> kirim melalui email <a href="mailto:yayasangitacahayakarsa@gmail.com">yayasangitacahayakarsa@gmail.com</a></p>
                    <p>Salam hormat dan sayang,</p>
                    <p><strong>GITA SEKAR CINDEWANGI</strong></p>
                </div>
                <div class="modal-footer">
                   
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<!-- Link to Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <script src="{{url('js/bootstrap.min.js')}}"></script>
  <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>