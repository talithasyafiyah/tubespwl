@extends('layout.main')
@section('title', 'Report')

@section('content')
    
@include('layout.sidebaruser')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Report</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Report</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jumlah Topup</th>
                                        <th>Tanggal Setoran</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @php $i = 0 @endphp
                                    @foreach ($tabungan as $tabung)
                                    <tr>
                                    @php $i++ @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$tabung->jlh_setoran}}</td>
                                        <?php $time = strtotime($tabung->tgl_setoran) ?>
                                        <td>{{date('d/M/Y', $time)}}</td>
                                        <td>{{$tabung->payment}}</td>
                                        <td>{{$tabung->status}}</td>
                                        <td><a href="/report/{{$tabung->tabungan_id}}" target="_blank" class="btn btn-primary col-md-12">Cetak <i class="fas fa-print"></i></a></td>
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