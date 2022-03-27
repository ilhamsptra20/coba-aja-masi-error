@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Daftar Laporan</h3>
            <hr>
            @forelse ($pengaduan as $item)
                <div class="card mb-3">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        {{ $item->isi_laporan }}
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <span>
                                dibuat pada : {{ $item->created_at }}
                            </span>
                            <span>
                                Status : {{ $item->status }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
            <div class="row">
                <div class="col-6">
                    <h4>Tidak ada pengaduan</h4>
                </div>
            @endforelse                
                <div class="col-6 d-flex justify-content-end">
                    <a href="{{ route('buatlaporan') }}" class="btn btn-primary py-1 px-3">buat Laporan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
