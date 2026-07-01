@extends('layouts.app')

@section('content')
    <h1>Detail Profile</h1>
    <p>
        <strong>Nama Lengkap:</strong>
        {{ $profile->nama_lengkap }}
    </p>

    <p>
        <strong>Tempat Lahir:</strong>
        {{ $profile->tempat_lahir }}
    </p>

    <p>
        <strong>Alamat:</strong>
        {{ $profile->alamat }}
    </p>

    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">
        Edit
    </a>

    <a href="{{ route('profiles.index') }}" class="btn">
        Kembali
    </a>
@endsection