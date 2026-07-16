@extends('layouts.app')
@section('content')
<h1>Edit Perusahaan</h1>

<form action="{{ route('companies.update', $company->id) }}" method="POST">
@csrf
@method('PUT')

<label>Nama perusahaan</label>
<input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan', $company->nama_perusahaan) }}">

    @error('nama_perusahaan')
            <div class="error">{{ $message }}</div>
    @enderror

    <label>Kelas</label>
    <input type="text" name="kelas" value="{{ old('kelas', $company->kelas) }}">

    @error('kelas')
            <div class="error">{{ $message }}</div>
    @enderror

    <label>Alamat Perusahaan</label>
    <input type="text" name="alamat" value="{{ old('alamat' , $company->alamat) }}">

    @error('alamat')
            <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-success">
            Perbarui
        </button>

        <a href="{{ route('companies.index') }}" class="btn">
            Kembali
        </a>
    </form>
@endsection