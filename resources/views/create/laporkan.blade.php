@extends('layout.main')

@section('title', 'Form Laporan')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card ">
            <div class="card-body">
                <form action="/success" method="POST">
                @csrf
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap">
                    @error('namalengkap')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                    
                    <label>Keluhan</label>
                    <select name="keluh" id="keluh" class="form-control">
                        <option value="Kebersihan">Kebersihan</option>
                        <option value="Fasilitas">Fasilitas</option>
                        <option value="Adminitrasi">Adminitrasi</option>
                        <option value="Lapangan">Lapangan</option>
                    </select>
                    <label>Kelas</label>
                    <select name="kelas" id="kelas" class="form-control">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                    <label>Nomor Handphone</label>
                    <input type="text" class="form-control @error('nomorhp') is-invalid @enderror" id="nomorhp" name="nomorhp">
                    @error('nomorhp')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                    <label>Jenis Kelamin</label>
                    <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                    </select>
                    <label>Komentar</label>
                    <textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control @error('kategori') is-invalid @enderror"></textarea>
                    @error('kategori')
                    <div class=" text-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection