@extends('template')

@section('content')
<div class="container mt-4">
    <form method="POST" action="{{ url('/combo') }}">
        @csrf
        <div class="mb-3">
            <label for="kategori">Pilih Kategori</label>
            <select name="kategori" id="kategori" class="form-select">
                @foreach ($kategori as $item)
                    <option value="{{ $item->ID }}">{{ $item->Nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">KIRIM</button>
    </form>

    @isset($selected_id)
        <div class="alert alert-info mt-4">
            Anda telah memilih Kategori dengan Kode : <strong>{{ $selected_id }}</strong>
        </div>
    @endisset
</div>
@endsection
