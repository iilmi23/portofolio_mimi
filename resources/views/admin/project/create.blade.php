@extends('layouts.app')

@section('content')
    <section class="content pt-4">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-12 px-0">
                    <div class="card">
                        <div class="card-header bg-white">
                            <span class="fw-bold" style="color:#222; font-size:1.1rem;">Tambah Project</span>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="nama_projek" class="fw-bold">Nama Project</label>
                                    <input type="text" name="nama_projek" class="form-control"
                                        value="{{ old('nama_projek') }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="deskripsi" class="fw-bold">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi') }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="screenshot" class="fw-bold">Screenshot (opsional)</label>
                                    <input type="file" name="screenshot" class="form-control">
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                        Simpan</button>
                                    <a href="{{ route('admin.project.index') }}" class="btn btn-light border ms-2">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
