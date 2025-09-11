<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Gestão Empresarial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('produtos.*') ? 'active' : '' }}"
                    href="{{ route('produtos.index') }}">
                    Produtos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.login') ? 'active' : '' }}"
                    href="{{ route('admin.login') }}">
                    Admin
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">
                    Log-In
                </a>
            </li>
        </ul>
    </div>
</nav>