<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm px-4">
    <!-- LOGO (Desktop only) -->
    <a class="navbar-brand d-none d-md-flex" href="{{ url('/') }}">
        <div class="d-flex align-items-center">
            <img src="/img/icon/ic_logo.webp" height="60" class="me-2">
            <div>
                <div class="amaranth-regular" style="font-size:24px;color:#6499E9">
                    {{ config('app.school_name') }}
                </div>
                <div class="urbanist-medium" style="font-size:14px">
                    {{ config('app.app_category') }}
                </div>
            </div>
        </div>
    </a>

    <!-- TOGGLER -->
    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto d-flex align-items-center">

            @guest
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'text-primary' : 'text-secondary' }}"
                        href="{{ route('index') }}">
                        <span class="nav-icon">🏠</span>
                        <div>Beranda</div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('books') ? 'text-primary' : 'text-secondary' }}"
                        href="{{ route('books') }}">
                        <span class="nav-icon">📚</span>
                        <div>Buku</div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contacts') ? 'text-primary' : 'text-secondary' }}"
                        href="{{ route('contacts') }}">
                        <span class="nav-icon">📞</span>
                        <div>Kontak</div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{ route('login') }}">
                        <span class="nav-icon">🔑</span>
                        <div>Masuk</div>
                    </a>
                </li>
            @endguest

            @auth
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'text-primary' : 'text-secondary' }}"
                        href="{{ route('dashboard') }}">
                        <span class="nav-icon">📖</span>
                        <div>Koleksi</div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('user.peminjaman.list') ? 'text-primary' : 'text-secondary' }}"
                        href="{{ route('user.peminjaman.list') }}">
                        <span class="nav-icon">🕒</span>
                        <div>Aktivitas</div>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#">
                        <span class="nav-icon">🔔</span>
                        <div>Notif</div>
                    </a>
                </li>

                <li class="nav-item dropup">
                    <a class="nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown">
                        <span class="nav-icon">👤</span>
                        <div>Akun</div>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li class="px-3 py-2">
                            <strong>{{ Auth::user()->name }}</strong><br>
                            <small>{{ Auth::user()->nisn }}</small>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item">Keluar</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endauth
        </ul>
    </div>
</nav>
