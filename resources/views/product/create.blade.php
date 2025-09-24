@extends('layouts.app', ['judul' => 'Tambah Produk'])

@section('content')
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <ul class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Kategori</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Suplier</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </ul>
    </div>
@endsection
