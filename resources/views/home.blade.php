@extends('layout.main')
@section('content')
<div class="card-col d-flex flex-row gap-3">
@foreach ($siswa as $data)
    <div class="card" style="width: 18rem;">
        <img src="gambar/{{ $data->foto }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $data->nama }}</h5>
            <p class="card-text">{{ $data->alamat }}</p>
            <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('siswa.destroy', $data->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Hapus</button>
            </form>
        </div>
      @endforeach
@endsection