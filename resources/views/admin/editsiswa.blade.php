@extends('layout.main')
@section('title', 'Edit Siswa')

@section('content')
    
@include('layout.sidebar')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit Siswa</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Siswa</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatesiswa/{{$data->NISN}}" method="POST" enctype="multipart/form-data" class="form form-horizontal">
                                @method('put')
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>NISN</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="NISN" class="form-control"
                                                name="NISN" value="{{old('NISN', $data->NISN)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama" class="form-control"
                                                name="nama" value="{{old('nama', $data->nama)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kelas</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="kelas_id" class="form-control"
                                                name="kelas_id" value="{{old('kelas_id', $data->kelas_id)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Alamat</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="alamat" class="form-control"
                                                name="alamat" value="{{old('alamat', $data->alamat)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No Hp</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="no_hp" class="form-control"
                                                name="no_hp" value="{{old('no_hp', $data->no_hp)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Saldo</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="saldo" class="form-control"
                                                name="saldo" value="{{old('saldo', $data->saldo)}}">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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