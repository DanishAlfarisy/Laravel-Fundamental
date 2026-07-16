@extends('layouts.app')
@section('content')
<h1> Tambah Perusahaan </h1>

<form action="{{ route('companies.store') }}" method="POST">
    @csrf

    <label>Nama perusahaan</label>
    <input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}">

    @error('nama_perusahaan')
            <div class="error">{{ $message }}</div>
    @enderror

    <label>Kelas</label>
    <input type="text" name="kelas" value="{{ old('kelas') }}">

    @error('kelas')
            <div class="error">{{ $message }}</div>
    @enderror

    <label>Alamat Perusahaan</label>
    <input type="text" name="alamat" value="{{ old('alamat') }}">

    @error('alamat')
            <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{route('companies.index') }}" class="btn">
            Kembali
        </a>
</form>
@endsection
