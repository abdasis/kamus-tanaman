<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <nav class="navbar navbar-expand-lg navbar-landing navbar-light border-bottom border-light fixed-top is-sticky shadow-none"
        id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="card-logo card-logo-dark" alt="logo dark"
                    height="35">
                <img src="{{ asset('assets/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light"
                    height="35">
            </a>
            <button class="navbar-toggler fs-20 text-body py-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mt-lg-0 me-auto" id="navbar-example">
                    <li class="nav-item">
                        <a class="nav-link d-flex gap-1" href="{{ url('/') }}">
                            <i class="ri-home-3-line"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex gap-1" href="{{ route('wiki.hasil-pencarian') }}">
                            <i class="ri-leaf-line"></i>
                            Tanaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
                    </li>
                </ul>

                @if (auth()->check())
                    <div class="dropdown nav-profile d-flex align-items-center gap-2">
                        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                            id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ file_exists(asset('upload/' . auth()->user()->profile_photo_path)) ? auth()->user()->profile_photo_path : Avatar::create(auth()->user()->name) }}"
                                alt="avatar-circle" class="avatar-xs rounded-circle me-2">
                            <span class="fw-bold">Hai, {{ Str::title(auth()->user()->name) }}</span>
                        </a>
                        <ul class="dropdown-menu border-light mt-4 px-2 shadow-sm" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fs-14 d-flex align-items-center justify-content-start gap-2 p-1"
                                    href="{{ route('dashboard') }}">
                                    <i class="mdi mdi-account"></i>
                                    Profile
                                </a></li>
                            <li>
                                <hr class="dropdown-divider border-light">
                            </li>
                            <li>
                                <form method="post" action="{{ route('logout') }}">
                                    @csrf
                                    <button
                                        class="dropdown-item fs-14 text-danger d-flex align-items-center justify-content-start gap-2 p-1">
                                        <i class="ri-logout-box-line"></i>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}"
                        class="btn fs-14 btn-success btn-border btn-sm d-flex justify-content-center align-items-center px-3">
                        Login / Register
                    </a>
                @endif
            </div>

        </div>
    </nav>
</div>
