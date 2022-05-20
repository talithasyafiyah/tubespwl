@extends('layout.main')
@section('title', 'Siswa')

@section('content')
    
@include('layout.sidebar')
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
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswas as $siswa)
                                    <tr>
                                        <td></td>
                                        <td>{{$siswa->NISN}}</td>
                                        <td>{{$siswa->nama}}</td>
                                        <td>{{$siswa->nama_kelas}}</td>
                                        <td>{{$siswa->alamat}}</td>
                                        <td>{{$siswa->no_hp}}</td>
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
@endsection