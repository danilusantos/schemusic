<nav class="navbar navbar-expand-lg bg-dark mb-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/site/img/logo-original-white.png') }}" alt="Logo"
                class="d-inline-block align-text-top img-fluid w-100" style="max-width: 150px;">
        </a>
        <div class="collapsed">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle" width="30px"
                            height="30px" alt="User">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <span class="dropdown-header">{{ Auth::user()->name }}</span>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" onclick="logout('{{ csrf_token() }}')" class="dropdown-item">
                            <i class="mr-2 fas fa-sign-out-alt"></i> Sair
                        </a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
