@extends('template')

@section('content')
<div class="container mt-4">
    <h4>Tambah Data Karyawan</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>NIP</label>
            <input type="text" name="NIP" maxlength="9" class="form-control" required value="{{ old('NIP') }}">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required value="{{ old('nama') }}">
        </div>
        <div class="mb-3">
            <label>Pangkat</label>
            <input type="text" name="pangkat" maxlength="15" class="form-control" required value="{{ old('pangkat') }}">
        </div>
        <div class="mb-3">
            <label>Gaji</label>
            <input type="number" name="gaji" class="form-control" required value="{{ old('gaji') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

<li class="nav-item">
    <a class="nav-link" href="{{ route('karyawan.index') }}">EAS</a>
</li>
