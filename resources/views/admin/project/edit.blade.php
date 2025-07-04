@extends('layouts.app')

@section('content')
    <section class="content pt-4">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-12 px-0">
                    <div class="card">
                        <div class="card-header bg-white">
                            <span class="fw-bold" style="color:#222; font-size:1.1rem;">Edit Project</span>
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
                            <form action="{{ route('admin.project.update', $project->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="nama_projek" class="fw-bold">Nama Project</label>
                                    <input type="text" name="nama_projek" class="form-control"
                                        value="{{ old('nama_projek', $project->nama_projek) }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="deskripsi" class="fw-bold">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="4" required>{{ old('deskripsi', $project->deskripsi) }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="screenshot" class="fw-bold">Screenshot</label>
                                    <input type="file" name="screenshot" class="form-control">
                                    @if (!empty($project->screenshot))
                                        <img src="/{{ $project->screenshot }}" alt="Screenshot" class="img-thumbnail mt-2"
                                            style="max-height: 100px;">
                                    @endif
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                        Update</button>
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
