@extends('layouts.admin.menu')
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
    <div class="panel-header panel-header-lg">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.kandidat')}}">Konten</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Program</li>
                </ol>
              </nav>
            <div class="row">
                <div class="col-sm-8 d-flex flex-column flex-sm-row align-items-center fs-2">
                    <i class="bi bi-plus-square"></i>
                    <div class="text-container ml-3">
                        <p class="fs-5 fw-bold mb-0">Tambah Konten</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
          <div class="card mb-3 p-4" style="max-width: 75%;">
            <form action="{{route('admin.kandidatStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <!-- Basic Information Fields -->
                <div class="mb-3">
                    <label for="bulan" class="form-label">Bulan</label>
                    <input type="text" class="form-control" id="bulan" name="bulan" value="{{ old('bulan') }}" required>
                    @error('bulan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun') }}" required>
                    @error('tahun')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_kandidat" id="nama_kandidat" value="{{ old('nama_kandidat') }}" required>
                    @error('nama_kandidat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="pendidikan" class="form-label">Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan" id="pendidikan" value="{{ old('pendidikan') }}" required>
                    @error('pendidikan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan') }}" required>
                    @error('pekerjaan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="tinggiBadan" class="form-label">Tinggi Badan (cm)</label>
                    <input type="text" class="form-control" name="tinggi_badan" id="tinggiBadan" value="{{ old('tinggi_badan') }}" required>
                    @error('tinggi_badan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="beratBadan" class="form-label">Berat Badan (kg)</label>
                    <input type="text" class="form-control" name="berat_badan" id="beratBadan" value="{{ old('berat_badan') }}" required>
                    @error('berat_badan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="foto_kandidat" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto_kandidat" id="beratBadan" value="{{ old('foto_kandidat') }}" required>
                    @error('foto_kandidat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <!-- Knowledge Levels (Bahasa, Kebudayaan, Musik, Sejarah) -->
                <div class="mb-3">
                    <label class="form-label">Penguasaan Bahasa Sunda</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa" id="bahasaKurangPaham" value="Kurang Paham" required>
                        <label class="form-check-label" for="bahasaKurangPaham">Kurang Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa" id="bahasaPaham" value="Paham">
                        <label class="form-check-label" for="bahasaPaham">Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa" id="bahasaFasih" value="Fasih">
                        <label class="form-check-label" for="bahasaFasih">Fasih</label>
                    </div>
                    @error('bahasa')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label class="form-label">Kebudayaan Sunda</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kebudayaan" id="kebudayaanKurangPaham" value="Kurang Paham" required>
                        <label class="form-check-label" for="kebudayaanKurangPaham">Kurang Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kebudayaan" id="kebudayaanPaham" value="Paham">
                        <label class="form-check-label" for="kebudayaanPaham">Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="kebudayaan" id="kebudayaanSangatPaham" value="Sangat Paham">
                        <label class="form-check-label" for="kebudayaanSangatPaham">Sangat Paham</label>
                    </div>
                    @error('kebudayaan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label class="form-label">Musik Sunda</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="musik" id="musikKurangPaham" value="Kurang Paham" required>
                        <label class="form-check-label" for="musikKurangPaham">Kurang Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="musik" id="musikPaham" value="Paham">
                        <label class="form-check-label" for="musikPaham">Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="musik" id="musikSangatPaham" value="Sangat Paham">
                        <label class="form-check-label" for="musikSangatPaham">Sangat Paham</label>
                    </div>
                    @error('musik')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label class="form-label">Pengetahuan Sejarah Sunda</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pengetahuan" id="sejarahKurangPaham" value="Kurang Paham" required>
                        <label class="form-check-label" for="sejarahKurangPaham">Kurang Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pengetahuan" id="sejarahPaham" value="Paham">
                        <label class="form-check-label" for="sejarahPaham">Paham</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="pengetahuan" id="sejarahSangatPaham" value="Sangat Paham">
                        <label class="form-check-label" for="sejarahSangatPaham">Sangat Paham</label>
                    </div>
                    @error('pengetahuan')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <!-- Media Instructions -->
                <div class="mb-3">
                    <p><strong>Media</strong></p>
                    <ol>
                        <li>Foto terbaik Anda mengenakan busana kebaya</li>
                        <li>Video perkenalan diri dengan minimal durasi 15 detik</li>
                    </ol>
                    {{-- <div class="form-group">
                        <label for="foto" class="form-label">Upload Foto</label>
                        <input type="file" class="form-control" name="foto" id="foto" accept="image/*" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="video" class="form-label">Upload Video</label>
                        <input type="file" class="form-control" name="video" id="video" accept="video/*" required>
                    </div> --}}
                </div>
    
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mt-3">Daftar</button>
            </form>
          </div>
      </div>
    </div>
</div>
@endsection