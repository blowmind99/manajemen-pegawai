@extends('layout.app')
@section('content')
    <!-- Data Table -->
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
            <h6 class="fw-semibold mb-0">Data Pegawai</h6>
            <ul class="d-flex align-items-center gap-2">
                <li class="fw-medium">
                    <a href="{{ url('/dashboard/add-pegawai') }}" class="btn btn-lilac-600 radius-8 px-20 d-flex align-items-center gap-1 hover-text-primary">
                        Tambah Data Pegawai
                    </a>
                </li>
                
            </ul>
        </div>
        @if (session()->has('success'))
            <div class="alert alert-success" id="success">
                <ul>
                        <li>{{ session()->get('success') }}</li>
                </ul>
            </div>
        @endif
        
        <div class="card basic-data-table">
            <div class="card-body">
                <table class="table mb-0" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                    No
                                    </label>
                                </div>
                            </th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->gaji }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src={{ asset('storage/avatars/'.$item->photo) }} alt="" class="flex-shrink-0 me-12 radius-8">
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ '/dashboard/show/'.Crypt::encrypt($item->id) }}" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                    </a>
                                    <a href="{{ '/dashboard/edit/'.Crypt::encrypt($item->id) }}" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                                        <iconify-icon icon="lucide:edit"></iconify-icon>
                                    </a>
                                    <a href="javascript:void(0)" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#delete{{ $item->id }}">
                                        <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ url('/delete/pegawai/'.$item->id) }}" method="post">
                                            @csrf
                                            @method('POST')
                                            <div class="modal-body">
                                                <div class="d-flex justify-content-center">
                                                    <img src="{{ url('assets/images/confirmation-delete.gif') }}" alt="">
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <p class="text-danger-main mb-16">Are You Sure Delete This Data?</p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div> 
        <!-- End Data Table -->
        @endsection