@extends('layouts.app', ['judul' => 'Tambah Kategori'])

@section('content')
    {{-- # untuk id dan . untuk class --}}
    <div class="container">
        <h3>Tambah Kategori</h3>
        <a href="{{ route('category.index') }}" class="btn btn-primary"> Kembali</a>

        <form action="{{ route('category.store') }}" method="post" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="name@example.com">
                @error('name')
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
