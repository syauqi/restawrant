<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main">
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn">
                    <a href="#">
                        <img class="img-fluid" src="#" alt="">
                    </a>
                    <div class="mobile-back text-right">
                        <span>Back</span>
                        <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="sidebar-main-title pt-0">
                    <div>
                        <h6>Halaman Utama</h6>
                        <p>Dashboard & Overview</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin') }}">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Kategori & Menu</h6>
                        <p>Menu & Kategori</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="grid"></i>
                        <span>Kategori Makanan</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li class="active">
                            <a href="{{ url('/admin/categories') }}">
                                Data Kategori Makanan
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/categories/create') }}">
                                Tambah Kategori Makanan / Minuman
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="coffee"></i>
                        <span>Katalog Menu</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ url('/admin/menus') }}">
                                Semua Daftar Menu
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/menus/create') }}">
                                Tambah Menu Baru
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Reservasi & Meja</h6>
                        <p>Todolist, Kalender & Bookmark</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="users"></i>
                        <span>Data Meja Restawrant</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ url('/admin/tables') }}">
                                Daftar Meja di Restawrant
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/tables/create') }}">
                                Tambah Data Meja Baru
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="calendar"></i>
                        <span>Daftar Reservasi</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ url('/admin/reservations') }}">
                                Semua Daftar Reservasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/reservations/create') }}">
                                Tambah Jadwal Reservasi Baru
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
