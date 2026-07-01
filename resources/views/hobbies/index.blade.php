@extends('layouts.app')

@section('content')
<h1>Daftar Hobi</h1>

@if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

<a href="{{ route('hobbies.create') }}" class="btn btn-success">
    Tambah Hobi
</a>

<a href="{{ route('profiles.index') }}" class="btn">
    Kembali
</a>

<br><br>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($hobbies as $hobby)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $hobby->profile->nama_lengkap }}</td>
                <td>{{ $hobby->hobi }}</td>
                <td>
                    <a href="{{ route('hobbies.edit', $hobby->id) }}" class="btn btn-warning">
                        Edit
                        </a>
                    <form action="{{ route('hobbies.destroy', $hobby->id) }}"method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-warning">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Belum ada data hobi.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection