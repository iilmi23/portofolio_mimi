@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content pt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Biodata</h3>
                            <a href="{{ route('admin.biodata.edit') }}" class="btn btn-success shadow-sm float-right"> <i
                                    class="fa fa-edit"></i> Edit </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <style>
                                .table-hsl thead {
                                    background-color: hsl(225, 24%, 27%) !important;
                                    color: #fff;
                                }
                            </style>
                            <div class="table-responsive">
                                <table id="data-table" class="table table-bordered table-hsl">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>No Telepon</th>
                                            <th>Usia</th>
                                            <th>Email</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($biodata)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $biodata->nama }}</td>
                                                <td>{{ $biodata->no_telepon }}</td>
                                                <td>{{ $biodata->usia }}</td>
                                                <td>{{ $biodata->email }}</td>
                                                <td>{{ $biodata->tanggal_lahir }}</td>
                                                <td>{{ $biodata->alamat }}</td>
                                                <td>
                                                    @if ($biodata->foto)
                                                        <img src="/{{ $biodata->foto }}" alt="Foto" width="60"
                                                            height="60" style="object-fit:cover;">
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td colspan="8" class="text-center">Data tidak tersedia</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('style-alt')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
@endpush

@push('script-alt')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $("#data-table").DataTable();
        });
    </script>
@endpush
