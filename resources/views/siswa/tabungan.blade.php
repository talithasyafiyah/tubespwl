@extends('layout.main')
@section('title', 'Tabungan')

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
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="first-name" class="form-control"
                                                    name="fname" placeholder="Nama">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Kelas</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="email" id="email-id" class="form-control"
                                                    name="email-id" placeholder="Kelas">
                                            </div>
                                            <div class="col-md-4">
                                                <label>Saldo</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="contact-info" class="form-control"
                                                    name="contact" placeholder="Saldo">
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1"><i class="fa-solid fa-hand-holding-dollar pe-4"></i>Menabung</button>
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
@endsection