@extends('layouts.app')

@section('content')
    <h1>Daftar Profile</h1>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('profiles.create') }}" class="btn btn-success">
        Tambah Profile
    </a>

     <a href="{{ route('hobbies.index') }}" class="btn">
        Halaman Hobi
    </a>
    <br><br>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($profiles as $profile)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $profile->nama_lengkap }}</td>
                    <td>{{ $profile->tempat_lahir }}</td>
                    <td>{{ $profile->alamat }}</td>
                    <td>
                        <a href="{{ route('profiles.show', $profile->id) }}" class="btn">
                            Detail
                        </a>

                        <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">
                            Edit
                        </a>

                        <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data profile.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection