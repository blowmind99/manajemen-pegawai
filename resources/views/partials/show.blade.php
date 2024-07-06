@extends('layout.app')
@section('content')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">View Pegawai</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ url('/dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">View Pegawai</li>
        </ul>
    </div>
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
                        <div class="col-sm-6">
                            <div class="mb-20">
                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Nama Lengkap</label>
                                <input type="text" class="form-control radius-8" id="name" placeholder="{{ $data->nama_lengkap }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-20">
                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Alamat</label>
                                <input type="text" class="form-control radius-8" id="name" placeholder="{{ $data->alamat }}" readonly>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-20">
                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Telepon</label>
                                <input type="text" class="form-control radius-8" id="name" placeholder="{{ $data->telepon }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-20">
                                <label for="name" class="form-label fw-semibold text-primary-light text-sm mb-8">Email</label>
                                <input type="text" class="form-control radius-8" id="name" placeholder="{{ $data->email }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection