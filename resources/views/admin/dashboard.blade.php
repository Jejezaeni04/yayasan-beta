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
        <div class="container mt-4">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-center">
                  <div class="card-body">
                    <i class="bi bi-people-fill fs-1 text-success"></i>
                    <h5 class="card-title">Total Pengunjung</h5>
                    <p class="card-text">5.325</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-center">
                  <div class="card-body">
                    <i class="bi bi-coin fs-1 text-warning"></i>
                    <h5 class="card-title">Total Donasi</h5>
                    <p class="card-text">Rp 24.456.789</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="d-flex justify-content-end align-items-end mr-5">
      <button type="button" class="btn btn-outline-secondary rounded-lg"><i class="bi bi-plus-circle mr-2"></i>Tambah</button>
    </div>
    <div class="container">
      <table class="table table-striped table-bordered">
        <thead class=" table-secondary">
          <tr>
            <th class="text-center">Foto</th>
            <th class="text-center">Judul</th>
            <th class="text-center">Detail</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="d-flex justify-content-center align-items-center">
                <img src="{{ url('image/img11.jpeg') }}" alt="Program 1" width="100">
              </div>
            </td>
            <td>Program makan untuk 99 orang manusia gerobak</td>
            <td>
              <div class="d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-link">Detail</a>
              </div>
            </td>
            <td >
              <div class="d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-primary mr-2">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </div>
            </td>
          </tr>
          <tr>
            </tr>
        </tbody>
      </table>
    </div>
</div>
    
@endsection