@extends('layout.main')
@section('title', 'Tabungan')

@section('content')
    
@include('layout.sidebar')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tabungan</h3>
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
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Saldo</th>
                                        <th>Detail</th>
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
                                        <td>{{$tabungan->saldo}}</td>
                                        <td><button type='submit' name='btnUpdate' class='btn btn-primary btn-sm'><i class='fa fa-folder-open'></i></button></td>
                                        <td><button type='submit' name='btnUpdate' class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button></td>
                                        <td><button type='submit' name='btnUpdate' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button></td>
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