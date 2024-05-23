<nav class="main-header navbar navbar-expand navbar-warning navbar-light">
    <!-- Push Menu -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="ml-auto navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="javascript:void(0)" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle" width="30px"
                    height="30px" alt="User">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <span class="dropdown-header">{{ Auth::user()->name }}</span>
                <div class="dropdown-divider"></div>
                <a href="javascript:void(0)" onclick="logout('{{ csrf_token() }}')" class="dropdown-item">
                    <i class="mr-2 fas fa-sign-out-alt"></i> Sair
                </a>
            </div>
        </li>
    </ul>
</nav>
