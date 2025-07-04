@extends('layouts.app')

@section('content')
    <section class="content pt-4">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-12 px-0">
                    <div class="card">
                        <div class="card-header bg-white">
                            <span class="fw-bold" style="color:#222; font-size:1.1rem;">Daftar Project</span>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 text-end">
                                <a href="{{ route('admin.project.create') }}" class="btn btn-success">
                                    <i class="fa fa-plus"></i> Tambah Project
                                </a>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            <style>
                                .table-hsl thead {
                                    background-color: hsl(225, 24%, 27%) !important;
                                    color: #fff;
                                }
                            </style>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hsl">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Project</th>
                                            <th>Deskripsi</th>
                                            <th>Screenshot</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($projects as $project)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $project->nama_projek }}</td>
                                                <td>{{ $project->deskripsi }}</td>
                                                <td>
                                                    @if ($project->screenshot)
                                                        <img src="{{ asset($project->screenshot) }}" alt="Screenshot"
                                                            style="max-width:100px;max-height:80px;">
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.project.edit', $project->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                    <form action="{{ route('admin.project.destroy', $project->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Yakin hapus project ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Belum ada project.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
