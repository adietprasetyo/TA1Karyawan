@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">
                <h1 style="text-align: center"><b><u>JABATAN</u></b></h1>
            </div>
            <div class="panel-body"><br>
                        <div class="py-4 d-flex justify-content-end align-items-center">
                                <a href="{{ url('admin/jabatans/create') }}" class="btn btn-primary"><i class="fa fa-share-square-o"></i> Add Data</a>
                        </div>
                        @if (session()->has('pesan'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('pesan') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped table-bordered table-hover" id="provinsi">
                                <thead>
                                    <tr bgcolor="#f2f2f2">
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($jabatans as $jabatan)
                                    <tr>
                                        <td>
                                            {{-- Jika admin login --}}
                                            @can('view', $jabatan)
                                            <a href="{{ url('/jabatans/'.$jabatan->id) }}">
                                                {{ $jabatan->nm_jabatan }}
                                            </a>
                                            @endcan
                                            {{-- admin --}}
                                            {{-- Jika user login --}}
                                            @cannot('view', $jabatan)
                                                {{ $jabatan->nm_jabatan }}
                                            @endcannot
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                                <a href="{{ route('jabatans.edit', $jabatan->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('jabatans.destroy', $jabatan->id) }}" method="post" class="d-inline-block">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>                        
                                    @empty
                                        <td colspan="2" class="text-center">Empty Data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
            </div>
        </div>
    </div>
</div>
<!-- DATA TABLE SCRIPTS -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
@endsection