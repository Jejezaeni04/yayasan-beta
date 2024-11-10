@extends('layouts.user.menu')
@section('content')
<div class="main-panel">
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
    <div class="container my-5">
        <div class="d-flex align-items-center pt-3 pb-2 mb-3 border-bottom">
            <i class="bi bi-heart fs-3 me-2"></i>
            <h4 class="m-0 fw-bold">Hasil Vote Anda</h4>
        </div>

        <!-- Voting Cards -->
        <div class="list-group">
            <!-- Card Item 1 -->

            <div class="list-group-item d-flex align-items-center p-3 border rounded mb-3">
                <img src="https://via.placeholder.com/80" alt="Nama Peserta" class="rounded me-3" style="width: 80px; height: 80px; object-fit: cover;">
                <div class="flex-grow-1">
                    <h6 class="m-0">Nama Peserta</h6>
                    <small class="text-muted">Putri Pasundan Bulan Agustus 2024</small>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-heart fs-5"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Hapus Vote?</a></li>     
                    </ul>
                  </div>
            </div>

            <!-- Add more items as needed -->
        </div>
    </div>
</div>
@endsection