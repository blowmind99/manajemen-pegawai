@extends('layout.app')
@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Edit Pegawai</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ url('/dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Edit Pegawai</li>
        </ul>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            <ul>
                    <li>{{ session()->get('success') }}</li>
            </ul>
        </div>
    @endif
    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card h-100">
                <div class="card-body p-24">
                    <div class="d-flex justify-content-center">
                        <div class="mb-24 mt-16">
                            <div class="p-4 text-center border border-top-0 border-start-0 border-end-0">
                                <img src="{{ asset('storage/avatars/'.$data->photo) }}" alt="" class="border br-white border-width-2-px w-200-px h-200-px rounded-circle object-fit-cover">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form action="{{ '/edit/pegawai/'.$data->id }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('POST')
                            <input type="text" value="{{ $data->id }}" hidden>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Nama Lengkap</label>
                                    <input type="text" class="form-control radius-8" id="name" value="{{ $data->nama_lengkap }}" name="nama_lengkap" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat</label>
                                    <input type="text" class="form-control radius-8" id="name" value="{{ $data->alamat }}" name="alamat" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Jabatan</label>
                                    <input type="text" class="form-control radius-8" id="name" value="{{ $data->jabatan }}" name="jabatan" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Gaji</label>
                                    <input type="text" class="form-control radius-8" id="name" value="{{ $data->gaji }}" name="gaji" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Telepon</label>
                                    <input type="text" class="form-control radius-8" id="name" value="{{ $data->telepon }}" name="telepon" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Email</label>
                                    <input type="text" class="form-control radius-8" id="name" value="{{ $data->email }}" name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Photo</label>
                                    <input type="file" class="form-control radius-8" id="name" name="photo" accept=".png, .jpg, .jpeg">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn rounded-pill btn-primary-600 radius-8 px-20 py-11">Perbaharui Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection