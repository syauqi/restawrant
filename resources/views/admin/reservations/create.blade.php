@extends('layouts.backend.master')

@section('title', 'Tambah Reservasi Baru — Restawrant')
@section('content')

    @push('create-article-styles')
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/select2.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/dropzone.css') }}">
    @endpush

    <div>
        <!-- pages title header start-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="card card-absolute mt-5 mt-md-4">
                    <div class="card-header bg-primary">
                        <h5 class="text-white">🍕 • Tambah Reservasi Baru</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            Dibawah ini adalah halaman untuk tambah menu. <span class="d-none d-md-inline">
                                Menu yang telah kamu tambahkan nantinya muncul di halaman landing page

                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- pages title header end-->
        <!-- main content start-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Menu</h5>
                        </div>
                        <div class="card-body add-post">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>
                                            <h4>Ada error nih 😓</h4>
                                        </li>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="row" method="POST" action="{{ route('admin.reservations.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Depan: <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-notes" width="20"
                                                            height="20" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <rect x="5" y="3" width="14" height="18" rx="2"></rect>
                                                            <line x1="9" y1="7" x2="15" y2="7"></line>
                                                            <line x1="9" y1="11" x2="15" y2="11"></line>
                                                            <line x1="9" y1="15" x2="13" y2="15"></line>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="first_name" name="first_name"
                                                    value="{{ old('first_name') }}" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Belakang: <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-currency-dollar" width="20"
                                                            height="20" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                                            </path>
                                                            <path d="M12 3v3m0 12v3"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="last_name" name="last_name"
                                                    value="{{ old('last_name') }}" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="name">Email: <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-currency-dollar" width="20"
                                                            height="20" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                                            </path>
                                                            <path d="M12 3v3m0 12v3"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="email" name="email"
                                                    value="{{ old('email') }}" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Nomor Telepon: <span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-currency-dollar" width="20"
                                                            height="20" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                                            </path>
                                                            <path d="M12 3v3m0 12v3"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="tel_number" name="tel_number"
                                                    value="{{ old('tel_number') }}" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nomor_telepon_input" class="form-label">Jumlah Tamu</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-currency-dollar" width="20"
                                                            height="20" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2">
                                                            </path>
                                                            <path d="M12 3v3m0 12v3"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <input class="form-control" id="guest_number" name="guest_number"
                                                    value="{{ old('guest_number') }}" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nomor_telepon_input" class="form-label">Tanggal
                                                Reservasi</label>
                                            <input type="datetime-local" id="res_date" name="res_date"
                                                class="form-control" />

                                            @error('res_date')
                                                <p class="register_text_error">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="juimagedul">Meja: <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <select id="table_id" name="table_id" class="custom-select">
                                                    @foreach ($tables as $table)
                                                        <option value="{{ $table->id }}">{{ $table->name }}
                                                            ({{ $table->guest_number }} Guests)
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-12">
                                    <div class="btn-showcase">
                                        <button class="btn btn-primary" type="submit">Tambah</button>
                                        <input class="btn btn-light" type="reset" value="Reset">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content end-->
    </div>
    <!-- file wrapper for better tabs start-->

    @push('ckeditor-scripts')
        <script src="{{ url('cuba/assets/js/editor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ url('cuba/assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
        <script src="{{ url('cuba/assets/js/dropzone/dropzone.js') }}"></script>
        <script src="{{ url('cuba/assets/js/dropzone/dropzone-script.js') }}"></script>
        <script src="{{ url('cuba/assets/js/select2/select2.full.min.js') }}"></script>
        <script src="{{ url('cuba/assets/js/select2/select2-custom.js') }}"></script>
        <script src="{{ url('cuba/assets/js/email-app.js') }}"></script>
        <script src="{{ url('cuba/assets/js/form-validation-custom.js') }}"></script>
        <script src="{{ url('cuba/assets/js/tooltip-init.js') }}"></script>
    @endpush

@endsection
