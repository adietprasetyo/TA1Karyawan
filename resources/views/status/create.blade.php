@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="h1 pt-2">Add Data</h1>
            <hr>
            <form action="{{ route('statuses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nm_status">Status</label>
                <select name="nm_status" id="nm_status" class="form-control">
                    <option hidden value="">--Pilih--</option>
                    <option value="Karyawan Tetap" {{ old('nm_status') == 'Karyawan Tetap' ? 'selected' : ''}}>Karyawan Tetap</option>
                    <option value="Karyawan Kontrak" {{ old('nm_status') == 'Karyawan Kontrak' ? 'selected' : ''}}>Karyawan Kontrak</option>
                    <option value="Karyawan Magang" {{ old('nm_status') == 'Karyawan Magang' ? 'selected' : ''}}>Karyawan Magang</option>
                </select>
            </div>
            <a href="{{ route('statuses.index') }}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary mb-2">Save</button>
        </div>
    </div>
</div>
@endsection