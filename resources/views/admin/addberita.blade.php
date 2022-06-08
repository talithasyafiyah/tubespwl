@extends('layout.main')
@section('title', 'Tambah Berita')

@section('content')
    
@include('layout.sidebar')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tambah Berita</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tambah Berita</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertberita" method="POST" enctype="multipart/form-data" class="form form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>User id</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="user_id" class="form-control"
                                                name="user_id" placeholder="User_id">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Judul</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="judul" class="form-control"
                                                name="judul" placeholder="Judul">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Konten</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="konten" class="form-control"
                                                name="konten" placeholder="Konten">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tanggal</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="tanggal" class="form-control"
                                                name="tanggal" placeholder="Tanggal">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Admin</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="admin" class="form-control"
                                                name="admin" placeholder="Admin">
                                        </div>
                                        <div class="mb-3">
                                             <label for="image" class="form-label">Upload Gambar</label>
                                             <input class="form-control" type="file" id="image" name="image">
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