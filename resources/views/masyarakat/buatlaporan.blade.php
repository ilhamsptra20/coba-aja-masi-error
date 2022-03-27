@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>BUAT Laporan</h3>
            <hr>
            <form action="{{ route('laporan.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>Laporan</h4>
                    </div>
                    
                    <div class="card-body">
                        <label for="isi" class="form-label">ISI LAPORAN</label>
                        <textarea name="isi_laporan" class="form-control" id="isi" cols="92" rows="10"></textarea>
                    </div>
                    <div class="card-footer">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary py-1 px-3">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
