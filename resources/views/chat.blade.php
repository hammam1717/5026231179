@extends('template')

@section('content')
<div class="container mt-4">
    <h2>Halaman Chat</h2>
    <div class="card">
        <div class="card-body">
            {!! $pesan !!}
        </div>
    </div>
</div>
@endsection
