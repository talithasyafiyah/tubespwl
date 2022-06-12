@extends('layout.main')
@section('title', 'Menabung')

@section('content')
    
@include('layout.sidebaruser')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Menabung</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Menabung</li>
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
                                <form class="form form-horizontal" method="POST" action="{{ route('siswa.simpan') }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="NISN">NISN</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="NISN" class="form-control @error('NISN') is-invalid @enderror"
                                                    name="NISN" placeholder="NISN" value="{{ old('NISN') }}">
                                                    @error('NISN')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="tgl_setoran">Tanggal Setoran</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="date" id="tgl_setoran" class="form-control @error('tgl_setoran') is-invalid @enderror"
                                                    name="tgl_setoran" placeholder="Tanggal Setoran" value="{{ old('tgl_setoran') }}">
                                                    @error('tgl_setoran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="jlh_setoran">Jumlah Setoran</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="jlh_setoran" class="form-control @error('jlh_setoran') is-invalid @enderror"
                                                    name="jlh_setoran" placeholder="Jumlah Setoran" value="{{ old('jlh_setoran') }}">
                                                    @error('jlh_setoran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="no_rekening">Nomor Rekening</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="no_rekening" class="form-control @error('no_rekening') is-invalid @enderror"
                                                    name="no_rekening" placeholder="Nomor Rekening" value="{{ old('no_rekening') }}">
                                                    @error('no_rekening')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="payment">Metode Pembayaran</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="payment" class="form-control @error('payment') is-invalid @enderror"
                                                    name="payment" placeholder="Metode Pembayaran" value="{{ old('payment') }}">
                                                    @error('payment')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                           
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-outline-primary me-1 mb-1"><i class="fa-solid fa-hand-holding-dollar pe-4"></i>Menabung</button>
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