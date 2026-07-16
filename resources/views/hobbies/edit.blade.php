@extends('layouts.app')
@section('content')
    <h1>Edit Hobi</h1>
<form action="{{ route('hobbies.update',$hobby->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Lengkap</label>
        <p>{{ $hobby->profile->nama_lengkap }}</p>


        <label>Hobi</label>
        <input type="text" name="hobi" value="{{ old('hobi', $hobby->hobi) }}">

        @error('hobi')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-success">
            Perbarui
        </button>

        <a href="{{ route('hobbies.index') }}" class="btn">
            Kembali
        </a>
    </form>
@endsection