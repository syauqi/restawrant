@extends('layouts.backend.master')

@section('title', 'Tambah Kategori Baru — Restawrant')
@section('content')

    @push('create-article-styles')
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/select2.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/dropzone.css') }}">
    @endpush

    <!-- file wrapper for better tabs start-->
    <div>
        <!-- pages title header start-->
        <div class="container-fluid">
            <div class="page-title">
                <div class="card card-absolute mt-5 mt-md-4">
                    <div class="card-header bg-primary">
                        <h5 class="text-white">🍕 • Edit Kategori {{ $category->name }}</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            Dibawah ini adalah halaman untuk tambah kategori. <span class="d-none d-md-inline">
                                Kategori yang telah kamu tambahkan nantinya muncul di halaman landing page

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
                            <h5>Edit Kategori</h5>
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
                            <form class="row" method="POST"
                                action="{{ route('admin.categories.update', $category->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="col-sm-12">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Nama Kategori: <span class="text-danger">*</span></label>
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
                                                <input class="form-control" id="name" name="name"
                                                    value="{{ $category->name }}" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="image">Gambar: <span class="text-danger">*</span></label>
                                            {{-- upload foto --}}
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" name="image" class="custom-file-input" id="image"
                                                        aria-describedby="inputGroupFileAddon01" accept="image/*">>
                                                    <label class="custom-file-label" for="inputGroupFile01">Pilih file
                                                        gambar yang
                                                        akan kamu upload ..</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="email-wrapper">
                                        <div class="theme-form">
                                            <div class="form-group">
                                                <label>Deskripsi Kategori <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" maxlength="255" rows="3">
                                                    {{ $category->description }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="btn-showcase">
                                        <button class="btn btn-primary" type="submit">Update</button>
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
