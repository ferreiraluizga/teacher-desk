<div class="d-none d-xxl-block">
    <aside class="d-flex flex-column text-white bg-success flex-shrink-0 p-3 shadow-lg position-fixed"
        style="width: 18vw; height: 100vh;">
        <a class="navbar-brand text-center" href="{{ route('home') }}" style="margin-bottom: 1vw; margin-top: 1vw;">
            <img src="{{ asset('logo.png') }}" alt="Logo" height="200" class="d-inline-block align-text-top">
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto" style="margin-top: 1vw; ">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-white">
                    <i class="bi bi-house-fill me-2"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('courses.index') }}" class="nav-link text-white">
                    <i class="bi bi-people-fill me-2"></i>
                    Turmas
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('students.index') }}" class="nav-link text-white">
                    <i class="bi bi-person-fill me-2"></i>
                    Alunos
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown-center mt-2 d-flex justify-content-center">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <strong class="nome">Usuário</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="minha_conta.php">Minha Conta</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </aside>
</div>

<!-- Mobile Navbar -->
<nav class="navbar p-3 d-block d-xxl-none navbar-dark bg-success shadow-lg fixed-top">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-4 text-start">
            <a class="navbar-brand text-center" href="{{ route('home') }}">
                <img src="{{ asset('logo.png') }}" alt="Logo" height="50">
            </a>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <strong class="nome">Usuário</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="minha_conta.php">Minha Conta</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-4 text-end">
            <button class="btn border-0 p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <i class="fs-3 text-white bi bi-list"></i>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas -->
<div class="offcanvas offcanvas-end text-bg-success" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-white">
                    <i class="bi bi-house-fill me-2"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('courses.index') }}" class="nav-link text-white">
                    <i class="bi bi-people-fill me-2"></i>
                    Turmas
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('students.index') }}" class="nav-link text-white">
                    <i class="bi bi-person-fill me-2"></i>
                    Alunos
                </a>
            </li>
        </ul>
    </div>
</div>