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
                            <form class="row" method="POST"
                                action="{{ route('admin.reservations.update', $reservation->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                                    value="{{ $reservation->first_name }}" type="text" required="">
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
                                                    value="{{ $reservation->last_name }}" type="text" required="">
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
                                                    value="{{ $reservation->email }}" type="text" required="">
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
                                                    value="{{ $reservation->tel_number }}" type="text" required="">
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
                                                    value="{{ $reservation->guest_number }}" type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="nomor_telepon_input" class="form-label">Tanggal
                                                Reservasi</label>
                                            <input type="datetime-local"
                                                value="{{ $reservation->res_date->format('Y-m-d\TH:i:s') }}" id="res_date"
                                                name="res_date" class="form-control" />

                                            @error('res_date')
                                                <p class="register_text_error">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="juimagedul">Meja: <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <select id="table_id" name="table_id" class="custom-select">
                                                    @foreach ($tables as $table)
                                                        <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                                            {{ $table->name }}
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


<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
            </div>
            <div class="m-2 p-2 bg-slate-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.reservations.update', $reservation->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="first_name" class="block text-sm font-medium text-gray-700"> First Name </label>
                            <div class="mt-1">
                                <input type="text" id="first_name" name="first_name"
                                    value="{{ $reservation->first_name }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('first_name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="last_name" class="block text-sm font-medium text-gray-700"> Last Name </label>
                            <div class="mt-1">
                                <input type="text" id="last_name" name="last_name"
                                    value="{{ $reservation->last_name }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('last_name')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                            <div class="mt-1">
                                <input type="email" id="email" name="email" value="{{ $reservation->email }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('email')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="tel_number" class="block text-sm font-medium text-gray-700"> Phone number
                            </label>
                            <div class="mt-1">
                                <input type="text" id="tel_number" name="tel_number"
                                    value="{{ $reservation->tel_number }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('tel_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="res_date" class="block text-sm font-medium text-gray-700"> Reservation Date
                            </label>
                            <div class="mt-1">
                                <input type="datetime-local" id="res_date" name="res_date"
                                    value="{{ $reservation->res_date->format('Y-m-d\TH:i:s') }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('res_date')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number
                            </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number"
                                    value="{{ $reservation->guest_number }}"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="status" class="block text-sm font-medium text-gray-700">Table</label>
                            <div class="mt-1">
                                <select id="table_id" name="table_id" class="form-multiselect block w-full mt-1">
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                            {{ $table->name }}
                                            ({{ $table->guest_number }} Guests)
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                                <div class="text-sm text-red-400">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
