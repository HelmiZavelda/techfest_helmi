@extends('layout.main')
@section('content')
    <h1>Halaman Create Data</h1>
    <form action="{{ route('berita.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">id</label>
            <input type="text" class="form-control" name="id" placeholder="
            @foreach ($siswa as $item)
                {{ $item->id }}
            @endforeach
            ">
        </div>
        