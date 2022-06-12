@extends('layout.main')
@section('title', 'Buat Profil')

@section('content')
    
@include('layout.sidebaruser')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Buat Profil</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    
                    <div class="card">
                        @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST" action="{{ route('siswa.simpanprofil') }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nisn">NISN</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="nisn" class="form-control @error('nisn') is-invalid @enderror"
                                                    name="nisn" placeholder="NISN" value="{{ old('nisn') }}">
                                                    @error('nisn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="nama">Nama</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                                    name="nama" placeholder="Nama" value="{{ old('nama') }}">
                                                    @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="alamat">Alamat</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                                    name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                                                    @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="no_hp">Nomor HP</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
                                                    name="no_hp" placeholder="Nomor HP" value="{{ old('no_hp') }}">
                                                    @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="kelas_id" >Kelas</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select class="form-select" name="kelas_id" id="kelas_id">
                                                    <option value="">-Pilih-</option>
                                                    @foreach ($x as $tabungan)
                                                        @if (old('kelas_id')==$tabungan->kelas_id)
                                                        <option value="{{ $tabungan->kelas_id }}"selected>{{ $tabungan->nama_kelas }}</option>
                                                        @else
                                                        <option value="{{ $tabungan->kelas_id }}">{{ $tabungan->nama_kelas }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>    
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                    <a href="/Siswa"class="btn btn-outline-info me-1 mb-1" type="button"><i class="fa-solid fa-arrow-left-long"></i> Kembali</a>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-outline-primary me-1 mb-1"><i class="fa-solid fa-user-plus"></i>  Buat Profil</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </div>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
@endsection