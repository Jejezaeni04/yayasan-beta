@extends('layouts.admin.menu')
@section('content')
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute bg-blue-800 fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <img src="{{ url('image/yayasan.png') }}" alt="" class="me-2" style="width: 40px; height: 40px;">
                <p class="fw-normal mb-0 ml-3">Yayasan Gita Cahaya Karsa Putri</p>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="panel-header panel-header-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 d-flex flex-column flex-sm-row align-items-center">
                    <img src="{{ url('image/yayasan.png') }}" alt="" class="mr-5 mb-3 mb-sm-0" style="width: 100%; max-width: 120px; height: auto;">
                    <div class="text-container ">
                        <p class="fs-5 fw-bold mb-0">Yayasan</p>
                        <p class="fs-5 fw-bold mb-0">Gita Cahaya Karsa Putri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center">
      <p class="fs-5 fw-bold mb-0 ml-4">Konten</p>
      <a href="{{route('admin.addKandidat')}}" class="btn btn-primary rounded-lg mr-4">
          <i class="bi bi-plus-circle mr-2"></i>Tambah
      </a>
  </div>
  
    <div class="container">
        <body>
            <h1>Selamat! Pendaftaran Anda Telah Diterima</h1>
            <p>Terima kasih telah mendaftar sebagai kandidat. Berikut adalah informasi yang Anda masukkan:</p>
        
            <ul>
                <li><strong>Nama:</strong> </li>
                <li><strong>Pendidikan:</strong> </li>
                <li><strong>Pekerjaan:</strong> </li>
                <li><strong>Tinggi Badan:</strong>  cm</li>
                <li><strong>Berat Badan:</strong>  kg</li>
                <li><strong>Penguasaan Bahasa Sunda:</strong> </li>
                <li><strong>Kebudayaan Sunda:</strong> </li>
                <li><strong>Musik Sunda:</strong> </li>
                <li><strong>Pengetahuan Sejarah Sunda:</strong> </li>
            </ul>
        
            <p>Selamat atas pendaftaran Anda!</p>
        </body>
        {{-- <nav aria-label="Page navigation example" class=" d-flex justify-content-center align-items-center">
          <ul class="pagination ">
              <li class="page-item {{ $konten->onFirstPage() ? 'disabled' : '' }}">
                  <a class="page-link" href="{{ $konten->previousPageUrl() }}" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                  </a>
              </li>
              @foreach ($konten->getUrlRange(1, $konten->lastPage()) as $page => $url)
                  <li class="page-item {{ $page == $konten->currentPage() ? 'active' : '' }}">
                      <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
              @endforeach
              <li class="page-item {{ $konten->hasMorePages() ? '' : 'disabled' }}">
                  <a class="page-link" href="{{ $konten->nextPageUrl() }}" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                  </a>
              </li>
          </ul>
        </nav> --}}

    </div>
</div>
    


@endsection