<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../" />
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <!-- Page Title  -->
    <title>{{ $title }}</title>
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('image/land-removebg.png') }}">
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('demo4/src/assets/css/dashlite.css?ver=3.0.3') }}" />
    <link id="skin-default" rel="stylesheet" href="{{ asset('demo4/src/assets/css/theme.css?ver=3.0.3') }}" />
    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="nk-body bg-white npc-default has-aside dark-mode">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="{{ route('home') }}" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('image/darkBg.png') }}"
                                        srcset="{{ asset('image/darkBg2x.png') }} 2x" alt="logo" />
                                    <img class="logo-dark logo-img" src="{{ asset('image/darkBg.png') }}"
                                        srcset="{{ asset('image/darkBg2x.png') }} 2x" alt="logo-dark" />
                                </a>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-lg-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ Auth::user()->name }}</span>
                                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a class="" href="{{ route('home') }}"><em
                                                                class="icon ni ni-layout"></em><span>Home</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('logout') }}"><em
                                                                class="icon ni ni-signout"></em><span>Logout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- .dropdown -->
                                    <li class="d-lg-none">
                                        <a href="#" class="toggle nk-quick-nav-icon me-n1"
                                            data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                                    </li>
                                </ul>
                                <!-- .nk-quick-nav -->
                            </div>
                            <!-- .nk-header-tools -->
                        </div>
                        <!-- .nk-header-wrap -->
                    </div>
                    <!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true"
                                data-toggle-screen="lg" data-toggle-body="true">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    <!-- .nk-menu -->
                                    <ul class="nk-menu">
                                        <li class="nk-menu-heading">
                                            {{-- {{ request()->is('/') ? 'active current-page' : '' }} --}}
                                            <!-- .nk-menu-heading -->
                                            <!-- .nk-menu-item -->
                                            <!-- .nk-menu-heading -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">
                                                Dashboard
                                            </h6>
                                        </li>
                                        @if (Auth::User()->role === 'admin')
                                            <li class="nk-menu-item">
                                                <a href="{{ route('dashboard-user') }}" class="nk-menu-link">
                                                    <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                                    <span class="nk-menu-text">User Manage</span>
                                                </a>
                                            </li>
                                        @endif
                                        <!-- .nk-menu-item -->
                                        <!-- .nk-menu-heading -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route('dashboard-article') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-article"></em></span>
                                                <span class="nk-menu-text">Artikel</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('dashboard-galery') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em
                                                        class="icon ni ni-tile-thumb"></em></span>
                                                <span class="nk-menu-text">Galeri</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- .nk-menu -->
                                </div>
                                <!-- .nk-sidebar-menu -->
                                <div class="nk-aside-close">
                                    <a href="#" class="toggle" data-target="sideNav"><em
                                            class="icon ni ni-cross"></em></a>
                                </div>
                                <!-- .nk-aside-close -->
                            </div>
                            <!-- .nk-aside -->

                            <div class="nk-content-body">
                                {{ $slot }}
                                <!-- footer @s -->
                                <div class="nk-footer">
                                    <div class="container wide-xl">
                                        <div class="nk-footer-wrap g-2">
                                            <div class="nk-footer-copyright">
                                                &copy; 2024 Project Pkl By
                                                <a href="#">Abdul</a>
                                            </div>
                                            <div class="nk-footer-links">
                                                <ul class="nav nav-sm">
                                                    <li class="nav-item">
                                                        <p data-bs-toggle="modal" class="nav-link"><em
                                                                class="icon ni ni-home"></em><span class="ms-1">Pkl
                                                                2024</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer @e -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

    <!-- JavaScript -->
    <script src="{{ asset('demo4/src/assets/js/bundle.js?ver=3.0.3') }}"></script>
    <script src="{{ asset('demo4/src/assets/js/scripts.js?ver=3.0.3') }}"></script>
    <script src="{{ asset('demo4/src/assets/js/charts/gd-default.js?ver=3.0.3') }}"></script>

</body>

</html>
