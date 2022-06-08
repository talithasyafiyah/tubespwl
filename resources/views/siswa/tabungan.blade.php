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
                        @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                        <div class="card-content">
                            {{-- <table class="table table-striped" id="table1">
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
                                        <td>Rp{{$tabungan->saldo}}</td>
                                        <td><button type='submit' name='btnUpdate' class='btn btn-primary btn-sm'><i class='fa fa-folder-open'></i></button></td>
                                        <td><button type='submit' name='btnUpdate' class='btn btn-success btn-sm'><i class='fa fa-edit'></i></button></td>
                                        <td><button type='submit' name='btnUpdate' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST" action="{{ route('siswa.simpan') }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="nisn">NISN</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="nisn" class="form-control @error('nisn') is-invalid @enderror"
                                                    name="nisn" placeholder="NISN" value="{{ old('nisn') }}">
                                                    @error('nisn')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <label for="nama">Nama</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                                    name="nama" placeholder="Nama" value="{{ old('nama') }}">
                                                    @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div> --}}
                                            {{-- <div class="col-md-4">
                                                <label for="alamat">Alamat</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                                    name="alamat" placeholder="Alamat" value="{{ old('alamat') }}">
                                                    @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div> --}}
                                            {{-- <div class="col-md-4">
                                                <label for="no_hp">Nomor HP</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
                                                    name="no_hp" placeholder="Nomor HP" value="{{ old('no_hp') }}">
                                                    @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div> --}}
                                            {{-- <div class="col-md-4">
                                                <label for="saldo">Saldo</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="saldo" class="form-control @error('saldo') is-invalid @enderror"
                                                    name="saldo" placeholder="Saldo" value="{{ old('saldo') }}">
                                                    @error('saldo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div> --}}
                                            <div class="col-md-4">
                                                <label for="kelas_id" >Kelas</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select class="form-select" name="kelas_id" id="kelas_id">
                                                    <option value="">-Pilih-</option>
                                                    @foreach ($x as $tabungan)
                                                        @if (old('kelas_id')==$tabungan->kelas_id)
                                                        <option value="{{ $tabungan->kelas_id }}"selected>{{ $tabungan->nama_kelas }}</option>
                                                        @else
                                                        <option value="{{ $tabungan->kelas_id }}">{{ $tabungan->nama_kelas }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>    
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <label for="user_id">User ID</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="user_id" class="form-control @error('user_id') is-invalid @enderror"
                                                    name="user_id" placeholder="User ID" value="{{ old('user_id') }}">
                                                    @error('user_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div> --}}
                                            
                                            <div class="col-md-4">
                                                <label for="tgl_setoran">Tanggal Setoran</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="date" id="tgl_setoran" class="form-control @error('tgl_setoran') is-invalid @enderror"
                                                    name="tgl_setoran" placeholder="Tanggal Setoran" value="{{ old('tgl_setoran') }}">
                                                    @error('tgl_setoran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="jlh_setoran">Jumlah Setoran</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="jlh_setoran" class="form-control @error('jlh_setoran') is-invalid @enderror"
                                                    name="jlh_setoran" placeholder="Jumlah Setoran" value="{{ old('jlh_setoran') }}">
                                                    @error('jlh_setoran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="no_rekening">Nomor Rekening</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="no_rekening" class="form-control @error('no_rekening') is-invalid @enderror"
                                                    name="no_rekening" placeholder="Nomor Rekening" value="{{ old('no_rekening') }}">
                                                    @error('no_rekening')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="payment">Metode Pembayaran</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="payment" class="form-control @error('payment') is-invalid @enderror"
                                                    name="payment" placeholder="Metode Pembayaran" value="{{ old('payment') }}">
                                                    @error('payment')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
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