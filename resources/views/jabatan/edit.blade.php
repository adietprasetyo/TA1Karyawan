@extends('master')
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12">
            <h1>Edit Data</h1>
            <hr>
            <form action="{{ route('jabatans.update', ['jabatan' => $jabatan->id]) }}" method="POST">
                @method('PATCH') {{-- karna update menggunakan PATCH maka perlu ditambahkan methodnya --}}
                @csrf
                <div class="form-group">
                    <label for="nm_jabatan">Jabatan</label>
                    <input type="text" class="form-control @error('nm_jabatan') is-invalid @enderror" id="nm_jabatan" name="nm_jabatan" value="{{ old('nm_jabatan') ?? $jabatan->nm_jabatan }}">
                    @error('nm_jabatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <a href="{{ route('jabatans.index') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                
            </form>
        </div>
    </div>
</div>
@endsection