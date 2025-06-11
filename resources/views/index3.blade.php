@extends('template')

@section('content')
    <h3 class="text-center">Data Semen</h3>

    <a href="/semen/tambah" class="btn btn-primary mb-3">+ Tambah Semen Baru</a>

    <form method="GET" action="/bis/cari" class="form-inline mb-3">
        <input type="text" name="cari" class="form-control mr-2" placeholder="Cari Merk Semen ..." value="{{ request()->cari }}">
        <button type="submit" class="btn btn-info">CARI</button>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered mt-2">
            <thead class="thead-dark">
                <tr>
                    <th>Merk Semen</th>
                    <th>Harga</th>
                    <th>Tersedia</th>
                    <th>Berat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($semen as $s)
                <tr>
                    <td>{{ $s->merksemen }}</td>
                    <td>{{ number_format($s->hargasemen, 0, ',', '.') }}</td>
                    <td>{{ $s->tersedia ? 'Ya' : 'Tidak' }}</td>
                    <td>{{ number_format($s->berat, 2, ',', '.') }} kg</td>
                    <td>
                        <a href="/semen/edit/{{ $s->id }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="/semen/hapus/{{ $s->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $semen->links() }}
@endsection
