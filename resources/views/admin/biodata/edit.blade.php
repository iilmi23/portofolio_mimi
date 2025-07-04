@extends('layouts.app')

@section('content')
    <section class="content pt-4">
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-12 px-0">
                    <div class="card">
                        <div class="card-header bg-white">
                            <span class="fw-bold" style="color:#222; font-size:1.1rem;">Edit Biodata</span>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (isset($biodata) && !empty($biodata->id))
                                <form action="{{ route('admin.biodata.update', $biodata->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                @else
                                    <div class="alert alert-danger">ID biodata tidak ditemukan. Tidak bisa update data.
                                    </div>
                            @endif
                            <div class="form-group mb-3">
                                <label for="nama" class="fw-bold">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ $biodata->nama ?? '' }}"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_telepon" class="fw-bold">No Telepon</label>
                                <input type="text" name="no_telepon" class="form-control"
                                    value="{{ $biodata->no_telepon ?? '' }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="usia" class="fw-bold">Usia</label>
                                <input type="number" name="usia" class="form-control" value="{{ $biodata->usia ?? '' }}"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="fw-bold">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ $biodata->email ?? '' }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal_lahir" class="fw-bold">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control"
                                    value="{{ $biodata->tanggal_lahir ?? '' }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat" class="fw-bold">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="3" required>{{ $biodata->alamat ?? '' }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto" class="fw-bold">Foto</label>
                                <input type="file" name="foto" class="form-control">
                                @if (!empty($biodata->foto))
                                    <img src="/{{ $biodata->foto }}" alt="Foto" class="img-thumbnail mt-2"
                                        style="max-height: 60px;">
                                @endif
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                <a href="{{ route('admin.biodata.show') }}" class="btn btn-light border ms-2">
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
