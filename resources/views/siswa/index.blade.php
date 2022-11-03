@extends('layout.main')
@section('content')

    <h1>list siswa</h1>
    <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nis</th>
                <th scope="col">nama</th>
                <th scope="col">tempat_lahir</th>
                <th scope="col">tanggal_lahir</th>
                <th scope="col">foto</th>
                <th scope="col">kelas</th>
                <th scope="col">alamat</th>
                <th scope="col">no_telp</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                        <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('siswa.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach