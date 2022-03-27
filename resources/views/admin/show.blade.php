@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{ $pengaduan->isi_laporan }}
    </div>
</div>
@endsection
