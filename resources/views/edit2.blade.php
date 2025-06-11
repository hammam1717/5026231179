@extends('template')

@section('content')
    <h3>Edit Semen</h3>

    <form method="POST" action="/semen/update/{{ $semen->id }}">
        @csrf
        <div class="form-group">
            <label for="merkbis">Merk Semen</label>
            <input type="text" name="merkbis" class="form-control" value="{{ $semen->merksemen }}" required>
        </div>
        <div class="form-group">
            <label for="hargabis">Harga Semen</label>
            <input type="number" name="hargabis" class="form-control" value="{{ $semen->hargasemen }}" required>
        </div>
        <div class="form-group">
            <label for="berat">Berat (kg)</label>
            <input type="number" step="0.01" name="berat" class="form-control" value="{{ $semen->berat }}" required>
        </div>
        <div class="form-group">
            <label><input type="checkbox" name="tersedia" {{ $semen->tersedia ? 'checked' : '' }}> Tersedia</label>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <a href="/bis" class="btn btn-secondary mt-3">Kembali</a>
@endsection
