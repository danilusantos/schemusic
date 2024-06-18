<aside class="main-sidebar sidebar-dark-warning elevation-2">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard.index') }}" class="brand-link">
        <img src="{{ asset('assets/admin/img/logos/logo-simples-amarela.png') }}" alt="Schemusic Logo"
            title="Schemusic Home" class="brand-image" style="opacity: 1">
        <span class="brand-text font-weight-light">Schemusic</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            {{-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul> --}}
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard.index') }}"
                        class="nav-link {{ request()->is('*dashboard*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('*/administration/*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->is('*administration*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Administração
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.administration.users.index') }}"
                                class="nav-link {{ request()->is('*users*') ? 'active' : '' }}">
                                <i class="far fa-user nav-icon"></i>
                                <p>Usuários</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.administration.groups.index') }}"
                                class="nav-link {{ request()->is('*groups*') ? 'active' : '' }}">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Grupos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.administration.directives.index') }}"
                                class="nav-link {{ request()->is('*directives*') ? 'active' : '' }}">
                                <i class="fas fa-users-cog nav-icon"></i>
                                <p>Diretivas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.administration.plans.index') }}"
                                class="nav-link {{ request()->is('*plans*') ? 'active' : '' }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>Planos</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
