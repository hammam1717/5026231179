@extends('template')

@section('content')
<div class="container mt-4">
    <h4>Data Karyawan</h4>
    <a href="{{ route('karyawan.create') }}" class="btn btn-success mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Pangkat</th>
                <th>Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->NIP }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->pangkat }}</td>
                    <td>Rp {{ number_format($item->gaji, 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('karyawan.destroy', $item->NIP) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus Data</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
