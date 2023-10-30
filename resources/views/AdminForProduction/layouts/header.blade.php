    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="{{ route('dashboard') }}"> <img style="height: 32px
        " src="assets/img/factor-logo-piso.png"> </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <strong style="color: white; "> @php
                    date_default_timezone_set('America/Chicago'); echo
                    date("
                    F
                    j,
                    Y,
                    g:i a"); @endphp </strong>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li class="dropdown-item"> User: <strong> {{ auth()->user()->name }}
                            {{ auth()->user()->last_name }} </strong>
                    </li>
                    <li class="dropdown-item"> User ID: <strong> {{ auth()->user()->email }}
                        </strong>
                    </li>
                    <li>
                    <li class="dropdown-item"> Status: <strong> ONLINE </strong>
                        <div class="spinner-grow spinner-grow-sm" role="status">
                            <span class="sr-only">...</span>
                        </div>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <img
                                src="{{ asset('assets/img/logo-factor.jpg') }}" style="width: 24px;" alt="Fator"
                                srcset="">
                        </a>

                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
    </nav>