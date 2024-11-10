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
    </div>
    
@endsection