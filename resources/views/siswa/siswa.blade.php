@extends('layout.main')
@section('title', 'Siswa')

@section('content')
    
@include('layout.sidebaruser')
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Data Siswa</h3>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Siswa</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="fa-solid fa-sack-dollar"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Saldo Saya</h6>
                                                <h6 class="font-extrabold mb-0">Rp{{$saldo}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4 style="text-align: center">Informasi Tabungan Saya</h4>
                            <br>
                            @auth
                            <table class="table table-bordered table-hover" style="text-align: center; border:black">
                                <thead style="background-color: rgb(220, 240, 248)">
                                <tr>
                                    <th>ID.</th>
                                    <th>Tanggal Setoran</th>
                                    <th>Jumlah Setoran</th>
                                    <th>Payment</th>
                                    <th>No.Rekening / E-Wallet</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                @foreach ($x as $tabungan)
                                <tbody>
                                <tr>
                                    <td>{{ $tabungan->tabungan_id }}</td>
                                    <?php $time = strtotime($tabungan->tgl_setoran) ?>
                                    <td>{{ date('d/M/Y', $time) }}</td>
                                    <td>{{ $tabungan->jlh_setoran }}</td>
                                    <td>{{ $tabungan->payment }}</td>
                                    <td>{{ $tabungan->no_rekening }}</td>
                                    <td>{{ $tabungan->status }}</td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                            @endauth
                            
                        </div>
                    </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <h4 style="text-align: center">Profil Saya</h4>
                                <br>
                                @foreach ($datas as $data)
                                <div class="row mb-3">
                                    <label for="id" class="col-sm-4 col-form-label col-form-label-lg">ID User</label>
                                    <div class="col-sm-8">
                                    <input type="number" class="form-control form-control-lg" placeholder="{{auth()->user()->id }}" id="id" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nisn" class="col-sm-4 col-form-label col-form-label-lg">NISN</label>
                                    <div class="col-sm-8">
                                    <input type="number" class="form-control form-control-lg" placeholder="{{ $data->NISN }}" id="nisn" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama" class="col-sm-4 col-form-label col-form-label-lg">Nama</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-lg" placeholder="{{ $data->nama }}" id="nama"readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="kelas_id" class="col-sm-4 col-form-label col-form-label-lg">Kelas</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-lg" placeholder="{{ $data->nama_kelas }}" id="kelas_id"readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="alamat" class="col-sm-4 col-form-label col-form-label-lg">Alamat</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-lg" placeholder="{{ $data->alamat }}" id="alamat"  readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="no_hp" class="col-sm-4 col-form-label col-form-label-lg">No HP</label>
                                    <div class="col-sm-8">
                                    <input type="number" class="form-control form-control-lg" placeholder="{{ $data->no_hp }}" id="no_hp" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="saldo" class="col-sm-4 col-form-label col-form-label-lg">Saldo</label>
                                    <div class="col-sm-8">
                                    <input type="email" class="form-control form-control-lg" placeholder="{{ $data->saldo }}" id="saldo"  readonly>
                                    </div>
                                </div>
                                <br>
                                {{-- Masih Belum FIX --}}
                                @if ($data->id = Auth::user()->id)
                                <div class="row mb-1">
                                    <a type="button" class="btn btn-outline-warning btn-lg mb-1"  href="Profil/{{auth()->user()->id }}/edit"><i class="fa-solid fa-pen-to-square"></i> Edit Profil</a>
                                </div>
                                @endif
                                <div class="row mb-1">
                                    <a type="button" class="btn btn-outline-success btn-lg mb-1"  href="{{ route('siswa.profil') }}"><i class="fa-solid fa-pen-to-square"></i> Buat Profil</a>
                                </div>
                                @endforeach
                                
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