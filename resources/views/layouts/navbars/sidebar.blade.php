<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Admin') }}
                    </a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link" href="/peserta/create">
                        <i class="ni ni-fat-add text-blue"></i> {{ __('Input Data Peserta') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/peserta">
                        <i class="ni ni-bullet-list-67 text-blue"></i> {{ __('Tampilan Data Peserta') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kelas/inputkelas">
                        <i class="ni ni-fat-add text-blue"></i> {{ __('Input Data Kelas') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kelas">
                        <i class="ni ni-bullet-list-67 text-blue"></i> {{ __('Tampilan Data Kelas') }}
                    </a>
                </li>
<!--
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-single-02" style="color: #f4645f;"></i>
                        <span class="nav-link-text" style="color: #f4645f;">{{ __('Data Peserta') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/peserta/create">
                                    {{ __('Input Data Peserta') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/peserta">
                                    {{ __('Tampilan Data Peserta') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                        <i class="ni ni-book-bookmark" style="color: #2dce89;"></i>
                        <span class="nav-link-text" style="color: #2dce89;">{{ __('Data Kelas') }}</span>
                    </a>

                    <div class="collapse show" id="navbar-examples">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/kelas/inputkelas">
                                    {{ __('Input Data Kelas') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kelas">
                                    {{ __('Tampilan Data Kelas') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
-->
                <li class="nav-item">
                    <a class="nav-link" href="/cetak">
                        <i class="ni ni-send text-blue"></i> {{ __('Cetak Sertifikat') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>