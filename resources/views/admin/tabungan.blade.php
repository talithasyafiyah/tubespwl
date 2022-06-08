@extends('layout.main')
@section('title', 'Tabungan')

@section('content')
    
@include('layout.sidebar')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tabungan</h3> <a type="button" class="btn btn-outline-primary btn-sm mb-3"  href="/addtabungan"><i class="fa fa-plus-circle orange_color"></i> Tambah Tabungan </a>
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
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Saldo</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0 @endphp
                                    @foreach ($tabungans as $tabungan)
                                    <tr>
                                    @php $i++ @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$tabungan->nama}}</td>
                                        <td>{{$tabungan->nama_kelas}}</td>
                                        <td>Rp{{$siswa->saldo}}</td>
                                        <td><a href="{{ url('edittabungan', $tabungan->tabungan_id)}}" type="submit" class='btn btn-success btn-sm'><i class='fa fa-edit'></i></a></td>
                                        <td>
                                            <form action="{{url('/deletetabungan',$tabungan->tabungan_id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class='btn btn-danger btn-sm' onclick="return confirm('Apakah yakin ingin menghapus data ini?')"><i class='fa fa-trash'></i></button>
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