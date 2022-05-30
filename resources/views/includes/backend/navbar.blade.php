<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper">
            <div class="logo-wrapper">
                <a href="index.html">
                    <img class="img-fluid" src="../assets/images/logo/logo.png" alt="">
                </a>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="sliders"></i>
            </div>
        </div>
        <div class="left-header col horizontal-wrapper pl-0">
            <ul class="horizontal-menu">
                <li class="mega-menu outside d-block d-md-none">
                    <a class="nav-link" href="{{ route('logout') }}" onclick=" event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i data-feather="log-out"></i>
                        <span>
                            Log out
                        </span>
                    </a>
                </li>
                <li class="level-menu outside">
                    <a class="nav-link" style="background-color: #ffefbe"
                        href="{{ '/admin/reservations/create' }}">
                        <i data-feather="plus-square"></i>
                        <span class="d-none d-sm-none d-md-inline-block">
                            Tambah Reservasi
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">
                <li class="text-decoration-none">
                    <a href="{{ url('admin/reservations') }}" data-toggle="tooltip" data-placement="bottom"
                        title="Reservasi">
                        <i class="text-dark text-decoration-none" data-feather="calendar"></i>
                    </a>
                </li>
                <li class="text-decoration-none">
                    <a href="{{ url('admin/menus') }}" data-toggle="tooltip" data-placement="bottom" title="Menu">
                        <i class="text-dark text-decoration-none" data-feather="coffee"></i>
                    </a>
                </li>
                <li class="text-decoration-none">
                    <a href="{{ url('admin/categories') }}" data-toggle="tooltip" data-placement="bottom"
                        title="Kategori">
                        <i class="text-dark text-decoration-none" data-feather="grid"></i>
                    </a>
                </li>
                <li class="text-decoration-none">
                    <a href="bookmark">
                        <a href="{{ url('admin/tables') }}" data-toggle="tooltip" data-placement="bottom"
                            title="Meja">
                            <i class="text-dark text-decoration-none" data-feather="users"></i>
                        </a>
                    </a>
                </li>
                <li>
                    <div class="mode">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Dark Mode">
                            <i data-feather="moon"></i>
                        </a>
                    </div>
                </li>
                <li class="maximize">
                    <a data-toggle="tooltip" data-placement="bottom" title="Full Screen" class="text-dark"
                        href="#!" onclick="javascript:toggleFullScreen()">
                        <i data-feather="maximize"></i>
                    </a>
                </li>
                <li class="profile-nav onhover-dropdown p-0 ml-2 mr-0">
                    <div class="media profile-media">
                        <img class="b-r-10"
                            src="https://source.boringavatars.com/beam/120/{{ Auth::user()->name }}?square&colors=FAD089,FF9C5B,F5634A,ED303C,3B8183"
                            width="40px">
                        <div class="media-body">
                            <span>{{ Auth::user()->name }}</span>
                            <p class="mb-0 font-roboto">🔑 Administrator
                                <i class="middle fa fa-angle-down"></i>
                            </p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <a href="{{ route('logout') }}" onclick=" event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i data-feather="log-out"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
