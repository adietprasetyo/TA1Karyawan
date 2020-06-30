@extends('master')
@section('content')
<div class="content-wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">
                <h1 style="text-align: center"><b><u>LIST KARYAWAN</u></b></h1>
            </div>
            <div class="panel-body"><br>
                        <div class="py-4 d-flex justify-content-end align-items-center">
                                <a href="{{ url('admin/karyawans/create') }}" class="btn btn-primary"><i class="fa fa-share-square-o"></i> Add Data</a>
                        </div>
                        @if (session()->has('pesan'))
                            <div class="alert alert-succes" role="alert">
                                {{ session()->get('pesan') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped table-bordered table-hover" id="provinsi">
                                <thead>
                                    <tr bgcolor="#f2f2f2">
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Umur</th>
                                        <th>No. Tlp.</th>
                                        <th>Status</th>
                                        <th>Jabatan</th>
                                        <th>Pendidikan</th>
                                        <th>Tgl Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($karyawans as $karyawan)
                                    <tr>
                                        <td>
                                            {{-- Jika admin login --}}
                                            @can('view', $karyawan)
                                            <a href="{{ url('/karyawans/'.$karyawan->id) }}">
                                                {{ $karyawan->nama }}
                                            </a>
                                            @endcan
                                            {{-- admin --}}
                                            {{-- Jika user login --}}
                                            @cannot('view', $karyawan)
                                                {{ $karyawan->nama }}
                                            @endcannot
                                        </td>
                                        <td>{{ $karyawan->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                                        <td>{{ $karyawan->umur }}</td>
                                        <td>{{ $karyawan->telepon->no_tlp }}</td>
                                        <td>{{ $karyawan->status->nm_status }}</td>
                                        <td>{{ $karyawan->jabatan->nm_jabatan }}</td>
                                        <td>{{ $karyawan->pendidikan->nm_pendidikan }}</td>
                                        <td>{{ $karyawan->tgl_msk }}</td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                                <a href="{{ route('karyawans.edit', $karyawan->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('karyawans.destroy', $karyawan->id) }}" method="post" class="d-inline-block">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>                        
                                    @empty
                                        <td colspan="9" class="text-center">Empty Data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- DATA TABLE SCRIPTS -->
<script src="{{ asset ('assets/js/dataTables/jquery.dataTables.js') }}"></script>
<script src="{{ asset ('assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- CUSTOM SCRIPTS -->
<script src="{{ asset ('assets/js/custom.js') }}"></script>
@endsection