@extends('layout.main')
@section('content')
    <h1>edit</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data" class="mt-3 mb-3"> 
        @csrf
        $@method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">id</label>
            <input type="text" class="form-control" name="id" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">nis</label>
            <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukkan nis">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">tempat_lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Masukkan tempat lahir">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">tanggal_lahir</label>
            <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" placeholder="Masukkan tanggal lahir">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">foto</label>
            <input type="text" name="foto" class="form-control" id="foto" placeholder="Masukkan foto">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">kelas</label>
            <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan kelas">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">no_telp</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan no_telp">
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection 