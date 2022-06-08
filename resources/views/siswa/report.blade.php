@extends('layout.main')
@section('title', 'Report')

@section('content')
    
@include('layout.sidebaruser')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Drugs</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Drugs</li>
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
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @php $i = 0 @endphp
                                    @foreach ($tabungan as $tabung)
                                    <tr>
                                    @php $i++ @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$tabung->jlh_setoran}}</td>
                                        <td>{{$tabung->tgl_setoran}}</td>
                                        <td>{{$tabung->payment}}</td>
                                        <td>{{$tabung->status}}</td>
                                        <td></td>
                                        <td></td>
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