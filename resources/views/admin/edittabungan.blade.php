@extends('layout.main')
@section('title', 'Edit Tabungan')

@section('content')
    
@include('layout.sidebar')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Tabungan</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tabungan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <form action="/updatetabungan/{{$data->tabungan_id}}" method="POST" enctype="multipart/form-data" class="form form-horizontal">
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
                                            <label>Kelas ID</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="kelas_id" class="form-control"
                                                name="kelas_id" value="{{old('kelas_id', $data->kelas_id)}}">   
                                        </div>
                                        <div class="col-md-4">
                                            <label>Jumlah Setoran</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="jlh_setoran" class="form-control"
                                                name="jlh_setoran" value="{{old('jlh_setoran', $data->jlh_setoran)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal Setoran</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tgl_setoran" class="form-control"
                                                name="tgl_setoran" value="{{old('tgl_setoran', $data->tgl_setoran)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Payment</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="payment" class="form-control"
                                                name="payment" value="{{old('payment', $data->payment)}}">
                                        </div>
                                        <div class="col-md-4">
                                            <label>No Rekening</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="no_rekening" class="form-control"
                                                name="no_rekening" value="{{old('no_rekening', $data->no_rekening)}}">
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