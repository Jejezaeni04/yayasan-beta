@extends('layouts.kandidat.menu')
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
  
    <div class="container">
        <body>
            @foreach ($kandidat as $item)
            <h1>Status Pendaftaran Anda : {{$item->approve}}</h1>
            <p>Terima kasih telah mendaftar sebagai kandidat. Berikut adalah informasi yang Anda masukkan:</p>
            <ul>
                    
                <li><strong>Nama : </strong>{{$item->nama_kandidat}} </li>
                <li><strong>Pendidikan : </strong>{{$item->pendidikan}}</li>
                <li><strong>Pekerjaan : </strong>{{$item->pekerjaan}}</li>
                <li><strong>Tinggi Badan : </strong> {{$item->tinggi_badan}} cm</li>
                <li><strong>Berat Badan : </strong> {{$item->berat_badan}} kg</li>
                <li><strong>Penguasaan Bahasa Sunda : </strong>{{$item->bahasa}}</li>
                <li><strong>Kebudayaan Sunda : </strong>{{$item->kebudayaan}}</li>
                <li><strong>Musik Sunda : </strong>{{$item->musik}}</li>
                <li><strong>Pengetahuan Sejarah Sunda : </strong>{{$item->pengetahuan}}</li>
            </ul>
            <p>Selamat atas pendaftaran Anda!</p>
            @endforeach
        
        </body>

    </div>
</div>
@endsection