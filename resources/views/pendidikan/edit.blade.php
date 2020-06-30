@extends('master')
@section('content')
<div class="container bg-white">
    <div class="row">
        <div class="col-sm-12">
            <h1>Edit Data</h1>
            <hr>
            <form action="{{ route('pendidikans.update', ['pendidikan' => $pendidikan->id]) }}" method="POST">
                @method('PATCH') {{-- karna update menggunakan PATCH maka perlu ditambahkan methodnya --}}
                @csrf
                <div class="form-group">
                    <label for="nm_pendidikan">Pendidikan</label>
                    <select name="nm_pendidikan" id="nm_pendidikan" class="form-control">
                        <option value="SD/MI" {{ (old('nm_pendidikan') ?? $pendidikan->nm_pendidikan) == 'SD/MI' ? 'selected' : ''}}>SD/MI</option>
                        <option value="SMP/MTs" {{ (old('nm_pendidikan') ?? $pendidikan->nm_pendidikan) == 'SMP/MTs' ? 'selected' : ''}}>SMP/MTs</option>
                        <option value="MA/SMA/K" {{ (old('nm_pendidikan') ?? $pendidikan->nm_pendidikan) == 'MA/SMA/K' ? 'selected' : ''}}>MA/SMA/K</option>
                        <option value="D-3" {{ (old('nm_pendidikan') ?? $pendidikan->nm_pendidikan) == 'D-3' ? 'selected' : ''}}>D-3</option>
                        <option value="D-4/S-1" {{ (old('nm_pendidikan') ?? $pendidikan->nm_pendidikan) == 'D-4/S-1' ? 'selected' : ''}}>D-4/S-1</option>
                        <option value="S-2" {{ (old('nm_pendidikan') ?? $pendidikan->nm_pendidikan) == 'S-2' ? 'selected' : ''}}>S-2</option>
                        <option value="S-3" {{ (old('nm_pendidikan') ?? $pendidikan->nm_pendidikan) == 'S-3' ? 'selected' : ''}}>S-3</option>
                    </select>
                </div>
                <a href="{{ route('pendidikans.index') }}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                
            </form>
        </div>
    </div>
</div>
@endsection