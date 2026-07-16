@extends('layouts.app')
@section('content')
    <h1>Daftar Perusahaan</h1>
    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('companies.create') }}" class="btn btn-success">
        Tambah Profile
    </a>

    <a href="{{ route('profiles.index') }}" class="btn">
    Kembali
    </a>
    <br><br>
    <table> 
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($companies as $company)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $company->nama_perusahaan }}</td>
                    <td>{{ $company->kelas }}</td>
                    <td>{{ $company->alamat }}</td>
                    <td>
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">
                            Edit
                        </a>

                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline;">
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
                    <td colspan="5">Belum ada data Perusahaan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection