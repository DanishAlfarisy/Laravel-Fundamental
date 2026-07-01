@extends('layouts.app')
@section('content')
    <h1>Edit Profile</h1>

    <form action="{{ route('profiles.update', $profile->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap', $profile->nama_lengkap) }}">

        @error('nama_lengkap')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $profile->tempat_lahir) }}">

        @error('tempat_lahir')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Alamat</label>
        <input type="text" name="alamat" value="{{ old('alamat', $profile->alamat) }}">

        @error('alamat')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-success">
            Perbarui
        </button>

        <a href="{{ route('profiles.index') }}" class="btn">
            Kembali
        </a>
    </form>
@endsection