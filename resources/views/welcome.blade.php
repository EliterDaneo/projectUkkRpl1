@extends('layouts.app', ['judul' => 'Halaman Utama'])

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <i class="bi bi-bag-check-fill"></i> Kategori
                </div>
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    This is some text within a card body.
                </div>
            </div>
        </div>
    </div>
@endsection
