@extends('layout.main')
@section('title', 'Berita')

@section('content')
    
@include('layout.sidebar')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Berita</h3> <a type="button" class="btn btn-outline-primary btn-sm mb-3"  href="/addberita"><i class="fa fa-plus-circle orange_color"></i> Tambah Berita </a>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Berita</li>
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
                                        <th>Judul</th>
                                        <th>Konten</th>
                                        <th>Tanggal</th>
                                        <th>Admin</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 0 @endphp
                                    @foreach ($beritas as $berita)
                                    <tr>
                                    @php $i++ @endphp
                                        <td>{{$i}}</td>
                                        <td>{{$berita->judul}}</td>
                                        <td>{{$berita->konten}}</td>
                                        <td>{{$berita->tanggal}}</td>
                                        <td>{{$berita->username}}</td>
                                        <td><a href="{{ url('editberita', $berita->berita_id)}}" type="submit" class='btn btn-success btn-sm'><i class='fa fa-edit'></i></a></td>
                                        <td>
                                        <form action="{{url('/deleteberita',$berita->berita_id)}}" method="POST">
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