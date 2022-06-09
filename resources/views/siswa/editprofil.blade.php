@extends('layout.main')
@section('title', 'Edit Profil')

@section('content')
    
@include('layout.sidebaruser')
            <div id="main-content">
                 <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Edit Profil</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profil</li>
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
                            <div class="card-body">
                                <form class="form form-horizontal" method="POST" action="/Profilupdate/{{ auth()->user()->id }}" enctype="multipart/form-data">
                                   @method('put')
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            {{-- <div class="col-md-4">
                                                <label for="user_id">User ID</label>
                                            </div> --}}
                                            {{-- <div class="col-md-8 form-group">
                                                <input type="number" id="user_id" class="form-control @error('user_id') is-invalid @enderror"
                                                    name="user_id"  value="{{auth()->user()->id }}">
                                                    @error('user_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div> --}}
                                            
                                            <div class="col-md-4">
                                                <label for="NISN">NISN</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="NISN" class="form-control @error('NISN') is-invalid @enderror"
                                                    name="NISN"  value="{{ old('NISN', $sis->NISN)}}">
                                                    @error('NISN')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <label for="nama">Nama</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                                    name="nama" value="{{ old('nama', $sis->nama) }}">
                                                    @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="kelas_id" >Kelas</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select class="form-select" name="kelas_id" id="kelas_id">
                                                    <option value="{{$sis->kelas_id}}">-Pilih-</option>
                                                    @foreach ($x as $tabungan)
                                                        {{-- @if (old('kelas_id', $sis->kelas_id)==$tabungan->kelas_id)
                                                        <option value="{{ $tabungan->kelas_id }}"selected>{{ $tabungan->nama_kelas }}</option>
                                                        @else --}}
                                                        <option value="{{ old('kelas_id',$tabungan->kelas_id) }}">{{ old('nama_kelas', $tabungan->nama_kelas) }}</option>
                                                        {{-- @endif --}}
                                                    @endforeach
                                                </select>    
                                            </div>
                                            <div class="col-md-4">
                                                <label for="alamat">Alamat</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                                    name="alamat"  value="{{ old('alamat', $sis->alamat) }}">
                                                    @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            <div class="col-md-4">
                                                <label for="no_hp">Nomor HP</label>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <input type="number" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
                                                    name="no_hp" value="{{ old('no_hp', $sis->no_hp) }}">
                                                    @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                            {{-- <div class="col-md-4">
                                                <label for="saldo">Saldo</label>
                                            </div> --}}
                                            {{-- <div class="col-md-8 form-group">
                                                <input type="number" id="saldo" class="form-control @error('saldo') is-invalid @enderror"
                                                    name="saldo"value="{{ old('saldo',  $sis->saldo) }}">
                                                    @error('saldo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div> --}}
                                            
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1"><i class="fa-solid fa-pen-to-square"></i>Edit Profil</button>
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