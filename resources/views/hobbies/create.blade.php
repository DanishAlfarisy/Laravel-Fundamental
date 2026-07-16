@extends('layouts.app')
@section('content')
<h1>Tambah Hobi</h1>
<form action="{{ route('hobbies.store') }}" method="POST">
        @csrf
        <label>Nama Profile</label>
<select name="profile_id">
    <option value="">-- Pilih Profile --</option>

    @foreach ($profiles as $profile)
        <option value="{{ $profile->id }}" {{ old('profile_id') == $profile->id ? 'selected' : '' }}>
            {{ $profile->nama_lengkap }}
        </option>
    @endforeach
</select>

        @error('profile_id')
            <div class="error">{{ $message }}</div>
        @enderror

        <br></br>

        <label>Hobi</label>
        <input type="text" name="hobi" value="{{ old('hobi') }}">

        @error('hobi')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{route('hobbies.index') }}" class="btn">
            Kembali
        </a>
    </form>
@endsection