@extends('layouts.backend.master')

@section('title', 'Katalog Menu Makanan & Minuman — Restawrant')
@section('content')

    @push('datatable-styles')
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/scrollbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/datatables.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('cuba/assets/css/vendors/datatable-extension.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">🍔 • Katalog Menu Makanan & Minuman</h5>
                </div>
                <div class="card-body">
                    <p>
                        Dibawah ini adalah data menu makanan dan minuman yang telah anda buat. <span
                            class="d-none d-md-inline">
                            Menu dibawah juga bisa kamu edit dengan menekan logo
                            pencil
                            berwarna ungu dan hapus dengan menekan logo sampah berwarna merah.
                            tambah
                            kategori
                            <a href="{{ url('/admin/menus/create') }}">disini ⇾</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="auto-fill">
                                <thead>
                                    <tr>
                                        <th>Nama Menu</th>
                                        <th>Harga</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($menus as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex py-1 align-items-center">
                                                    <div class="avatars mr-2">
                                                        <div class="avatar ratio">
                                                            <img style="object-fit: cover;
                                                                                                                                                                                        width: 40px;
                                                                                                                                                                                     height: 40px;"
                                                                class="b-r-8"
                                                                src="{{ $item->image }}?colors=FAD089,FF9C5B,F5634A,ED303C,3B8183">
                                                        </div>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <div class="font-weight-bold">&nbsp; {{ $item->name }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Rp.{{ substr(strip_tags(htmlspecialchars_decode($item->price)), 0, 60) }}.000,00
                                            </td>
                                            <td>

                                                <a href="{{ route('admin.menus.edit', $item->id) }}"
                                                    class="btn btn-info px-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-edit" width="16"
                                                        height="16" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3">
                                                        </path>
                                                        <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3"></path>
                                                        <line x1="16" y1="5" x2="19" y2="8">
                                                        </line>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('admin.menus.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger px-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-trash" width="16"
                                                            height="16" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <line x1="4" y1="7" x2="20"
                                                                y2="7"></line>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Menu</th>
                                        <th>Harga</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @push('datatable-scripts')
            <script src="{{ url('cuba/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
            <script src="{{ url('cuba/assets/js/datatable/datatable-extension/custom.js') }}"></script>
            <script src="{{ url('cuba/assets/js/tooltip-init.js') }}"></script>
        @endpush

    @endsection
