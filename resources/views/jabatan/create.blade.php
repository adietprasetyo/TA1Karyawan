@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="h1 pt-2">Add Data</h1>
            <hr>
            <form action="{{ route('jabatans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nm_jabatan">Jabatan</label>
                <input type="text" class="form-control @error('nm_jabatan') is-invalid @enderror" id="nm_jabatan" name="nm_jabatan" value="{{ old('nm_jabatan') }}">
                @error('nm_jabatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <a href="{{ route('jabatans.index') }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary mb-2">Save</button>
        </div>
    </div>
</div>
@endsection