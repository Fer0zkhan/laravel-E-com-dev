<div class="page-wrapper">
    <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg d-flex justify-content-between">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="{{ asset('admin_assets/assets/img/user/user.png') }}" class="user-image"
                                alt="User Image" />
                            <span class="d-none d-lg-inline-block">@auth
                                    {{ Auth::user()->name }}
                                @endauth</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <!-- User image -->
                            <li class="dropdown-header">
                                {{-- <img src="{{ asset('admin_assets/assets/img/user/user.png') }}" class="img-circle"
                                    alt="User Image" /> --}}
                                <div class="d-inline-block">
                                    @auth
                                        {{ Auth::user()->name }}
                                        <small class="pt-1">{{ Auth::user()->email }}</small>
                                    @endauth
                                </div>
                            </li>

                            <li>
                                <a href="{{ route('admin_profile') }}">
                                    <i class="mdi mdi-account"></i>My Profile
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="{{ route('admin_logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('innerHead')
</div>
