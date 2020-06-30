@extends('master')
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Data Karyawan</h1>
            <hr>
            <form action="{{ route('karyawans.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki-laki" value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : ''}}>
                    <label for="laki-laki" class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="P" {{ old('jenis_kelamin') == 'L' ? 'checked' : ''}}>
                    <label for="perempuan" class="form-check-label">Perempuan</label>
                </div>
                @error('jenis_kelamin')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur') }}">
                    @error('umur')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="no_tlp">No. Telp.</label>
                <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}">
                @error('no_tlp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status_id">Status</label>
                <select name="status_id" id="status_id" class="form-control">
                    @foreach ($statuses as $status)
                    <option hidden value="">--Pilih--</option>
                    <option value="{{ $status->id }}" {{ old('status_id') == $status->nm_status ? 'selected' : ''}}>{{ $status->nm_status }}</option>
                    @endforeach
                </select>
                @error('status_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jabatan_id">Jabatan</label>
                <select name="jabatan_id" id="jabatan_id" class="form-control">
                    @foreach ($jabatans as $jabatan)
                    <option hidden value="">--Pilih--</option>
                    <option value="{{ $jabatan->id }}" {{ old('jabatan_id') == $jabatan->nm_jabatan ? 'selected' : ''}}>{{ $jabatan->nm_jabatan }}</option>
                    @endforeach
                </select>
                @error('jabatan_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pendidikan_id">Pendidikan</label>
                <select name="pendidikan_id" id="pendidikan_id" class="form-control">
                    @foreach ($pendidikans as $pendidikan)
                    <option hidden value="">--Pilih--</option>
                    <option value="{{ $pendidikan->id }}" {{ old('pendidikan_id') == $pendidikan->nm_pendidikan ? 'selected' : ''}}>{{ $pendidikan->nm_pendidikan }}</option>
                    @endforeach
                </select>
                @error('pendidikan_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tgl_msk">Tanggal Masuk</label>
                <input type="date" class="form-control @error('tgl_msk') is-invalid @enderror" id="tgl_msk" name="tgl_msk" value="{{ old('tgl_msk') }}">
                @error('tgl_msk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>    
</div>
@endsection