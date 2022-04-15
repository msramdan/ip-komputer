<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-auto">
        {{-- <li class="nav-item dropdown no-arrow">
            @switch(app()->getLocale())
                @case('id')
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/id.png') }}" alt="" width="18px" /> &nbsp; <span style="color: black">
                            {{ strtoupper(app()->getLocale()) }}</span>
                    </a>
                @break
                @case('en')
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/en.png') }}" alt="" width="18px" /> &nbsp; <span style="color: black">
                            {{ strtoupper(app()->getLocale()) }}</span>
                    </a>
                @break
                @default
            @endswitch

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'id']) }}">
                    <img src="{{ asset('img/id.png') }}" alt="" width="18px" />
                    Indonesia
                </a>
                <a class="dropdown-item" href="{{ route('localization.switch', ['language' => 'en']) }}">
                    <img src="{{ asset('img/en.png') }}" alt="" width="18px" />
                    English
                </a>
            </div>
        </li> --}}
        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(auth()->user()->email))) }}&s=30"
                    alt="Avatar" class="img-profile rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
