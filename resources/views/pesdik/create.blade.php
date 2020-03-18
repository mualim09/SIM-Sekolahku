@extends('layouts.master')

@section('content')
<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/pesdik/tambah" method="POST" enctype="multipart/form-data">
            <h3><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Tambah Data Peserta Didik</h3>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-6">
                    <label for="nama">Nama Siswa</label>
                    <input value="{{old('nama')}}" name="nama" type="text" class="form-control" id="nama"
                        placeholder="Nama Siswa" required>
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="custom-select my-1 mr-sm-1 bg-light" id="jenis_kelamin"required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    <label for="nisn">NISN</label>
                    <input value="{{old('nisn')}}" name="nisn" type="text" class="form-control" id="nisn"
                        placeholder="NISN" required>
                    <label for="induk">Induk</label>
                    <input value="{{old('induk')}}" name="induk" type="text" class="form-control" id="induk"
                        placeholder="Induk" required>
                    <label for="rombel">Rombongan Belajar</label>
                        <select name="rombel" class="custom-select my-1 mr-sm-2 bg-light" id="rombel"required>
                            <option value="">-- Pilih Rombongan Belajar --</option>
                            @foreach($data_rombel as $rombel)
                            <option value="{{$rombel->id}}">(Tingkat {{$rombel->kelas}}) {{$rombel->tapel->tahun}} {{$rombel->tapel->semester}} {{$rombel->nama_rombel}}
                            </option>
                            @endforeach
                        </select>
                </div>
                <div class="col-6">
                <label for="tempat_lahir">Tempat Lahir</label>
                    <input value="{{old('tempat_lahir')}}" name="tempat_lahir" type="text" class="form-control" id="tempat_lahir"
                        placeholder="Tempat Lahir" required>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input value="{{old('tanggal_lahir')}}" name="tanggal_lahir" type="date" class="form-control bg-light"
                        id="tanggal_lahir" required>
                    <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                        <select name="jenis_pendaftaran" class="custom-select my-1 mr-sm-1 bg-light" id="jenis_pendaftaran"required>
                            <option value="">-- Pilih Jenis Pendaftaran --</option>
                            <option value="Siswa Baru">Siswa Baru</option>
                            <option value="Pindahan">Pindahan</option>
                            <option value="Mengulang">Mengulang</option>
                        </select>
                    <label for="tanggal_masuk">Tanggal Masuk</label>
                    <input value="{{old('tanggal_masuk')}}" name="tanggal_masuk" type="date" class="form-control bg-light"
                        id="tanggal_masuk" required>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection
