@extends('layout.main')
@section('title', 'Konfirmasi')

@section('content')
    
@include('layout.sidebar')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Konfirmasi Tabungan</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Konfirmasi Tabungan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{session('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Jumlah Setoran</th>
                                        <th>Tanggal Setoran</th>
                                        <th>Payment</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0 @endphp
                                    @foreach ($tabungans as $tabungan)
                                    <tr>
                                    @php $i++ @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$tabungan->NISN}}</td>
                                        <td>Rp{{$tabungan->jlh_setoran}}</td>
                                        <td>{{$tabungan->tgl_setoran}}</td>
                                        <td>{{$tabungan->payment}}</td>
                                        <td>
                                            <form action="{{url('/confirmAcc',$tabungan->tabungan_id)}}" method="POST">
                                                @method('put')
                                                @csrf
                                                <button type="submit" class='btn btn-success btn-sm' onclick="return confirm('Apakah yakin ingin konfirmasi data ini?')"><i class="fa-solid fa-check"></i> Accept</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{url('/confirmReject',$tabungan->tabungan_id)}}" method="POST">
                                                @method('put')
                                                @csrf
                                                <button type="submit" class='btn btn-danger btn-sm' onclick="return confirm('Apakah yakin ingin menolak data ini?')"><i class="fa-solid fa-xmark"></i> Reject</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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