@extends('template')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h3 class="text-center">Tambah Semen</h3>

    <form method="POST" action="/semen/store" class="col-md-6 mx-auto">
        @csrf
        <div class="form-group">
            <label for="merksemen">Merk Semen</label>
            <input type="text" name="merksemen" class="form-control" placeholder="Merk Semen" required>
        </div>
        <div class="form-group">
            <label for="hargasemen">Harga Semen</label>
            <input type="number" name="hargasemen" class="form-control" placeholder="Harga Semen (tulis tanpa titik, co : 120000000)" required>
        </div>
        <div class="form-group">
            <label for="berat">Berat (kg)</label>
            <input type="number" step="0.01" name="berat" class="form-control" placeholder="Berat Semen (tulis angka)" required>
        </div>
        <div class="form-group">
            <label><input type="checkbox" name="tersedia"> Tersedia</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <a href="/semen" class="btn btn-secondary mt-3">Kembali</a>
@endsection
