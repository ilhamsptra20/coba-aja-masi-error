@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Daftar Laporan</h3>
            <hr>
            @forelse ($pengaduan as $item)
                <div class="card mb-3">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <span>
                                Dibuat oleh {{ $item->masyarakat->nama }}
                            </span>
                            <span>
                                @if ($item->status = 'proses')
                                    <form action="/admin/selesai/{{ $item->id }}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <button type="submit" class="btn btn-success py-0">selesai</button>
                                    </form>
                                @endif
                            </span>
                        </div>
                    </div>

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
            </div>
        </div>
    </div>
</div>
@endsection
