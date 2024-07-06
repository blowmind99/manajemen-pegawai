@extends('layout.app')
@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Tambah Pegawai</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ url('/dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Tambah Pegawai</li>
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
                    <div class="row">
                        <form action="{{ '/add/pegawai' }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('POST')
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Nama Lengkap</label>
                                    <input type="text" class="form-control radius-8" id="name" name="nama_lengkap" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat</label>
                                    <input type="text" class="form-control radius-8" id="name" name="alamat" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Telepon</label>
                                    <input type="text" class="form-control radius-8" id="name" name="telepon" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Email</label>
                                    <input type="text" class="form-control radius-8" id="name" name="email" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-20">
                                    <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Photo</label>
                                    <input type="file" class="form-control radius-8" id="name" name="photo" accept=".png, .jpg, .jpeg" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn rounded-pill btn-primary-600 radius-8 px-20 py-11">Tambah Data Pegawai</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection