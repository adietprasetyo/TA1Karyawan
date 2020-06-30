@extends('master')
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12">
            <h1>Edit Data</h1>
            <hr>
            <form action="{{ route('statuses.update', ['status' => $status->id]) }}" method="POST">
                @method('PATCH') {{-- karna update menggunakan PATCH maka perlu ditambahkan methodnya --}}
                @csrf
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') ?? $status->status }}">
                    @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nm_status">Status</label>
                    <select name="nm_status" id="nm_status" class="form-control">
                        <option value="Karyawan Tetap" {{ (old('nm_status') ?? $status->nm_status) == 'Karyawan Tetap' ? 'selected' : ''}}>Karyawan Tetap</option>
                        <option value="Karyawan Kontrak" {{ (old('nm_status') ?? $status->nm_status) == 'Karyawan Kontrak' ? 'selected' : ''}}>Karyawan Kontrak</option>
                        <option value="Karyawan Magang" {{ (old('nm_status') ?? $status->nm_status) == 'Karyawan Magang' ? 'selected' : ''}}>Karyawan Magang</option>
                    </select>
                </div>
                <a href="{{ route('statuses.index') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                
            </form>
        </div>
    </div>
</div>
@endsection