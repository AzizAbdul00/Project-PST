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
    {{-- animet css AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Css --}}
</head>

<body class="nk-body bg-white npc-default has-aside">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('image/darkBg.png') }}"
                                        srcset="{{ asset('image/darkBg2x.png') }} 2x" alt="logo" />
                                    <img class="logo-dark logo-img" src="{{ asset('image/light2.png') }}"
                                        srcset="{{ asset('image/light(2) 2x.png') }} 2x" alt="logo-dark" />
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
                                                    {{-- <img src="{{ asset('image/avatar.jpeg') }}" alt=""> --}}
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <em class="icon ni ni-user-alt"></em>
                                                        {{-- <img src="{{ asset('image/avatar.jpeg') }}" alt=""> --}}
                                                    </div>
                                                    <div class="user-info">
                                                        <a
                                                            href="{{ route('profile', ['username' => Auth::user()->username]) }}">
                                                            <span class="lead-text">{{ Auth::user()->name }}</span>
                                                        </a>
                                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a
                                                            href="{{ route('profile', ['username' => Auth::user()->username]) }}"><em
                                                                class="icon ni ni-user-alt"></em><span>
                                                                Profile</span></a>
                                                    </li>
                                                    {{-- <li>
                                                        <a class="dark-switch" id="dark-mode" href="#"><em
                                                                class="icon ni ni-moon"></em><span>Dark
                                                                Mode</span></a>
                                                            </li> --}}
                                                    <li>
                                                        <a class="" href="{{ route('dashboard') }}"><em
                                                                class="icon ni ni-layout"></em><span>Dashboard</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('logout') }}"><em
                                                                class="icon ni ni-signout"></em><span>Logout</span></a>
                                                        {{-- <a href="#"><em
                                                                class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a> --}}
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
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">
                                                Home
                                            </h6>
                                        </li>
                                        {{-- {{ request()->is('/') ? 'active current-page' : '' }} --}}
                                        <!-- .nk-menu-heading -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route('home') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                                                <span class="nk-menu-text">Home</span>
                                            </a>
                                        </li>
                                        <!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">
                                                Users
                                            </h6>
                                        </li>
                                        <!-- .nk-menu-heading -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route('user') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                                <span class="nk-menu-text">User</span>
                                            </a>
                                        </li>
                                        <!-- .nk-menu-item -->
                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title text-primary-alt">
                                                Aktivitas
                                            </h6>
                                        </li>
                                        <!-- .nk-menu-heading -->
                                        <li class="nk-menu-item">
                                            <a href="{{ route('article') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-article"></em></span>
                                                <span class="nk-menu-text">Artikel</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('galery') }}" class="nk-menu-link">
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
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // function confirmDelete(event, url) {
        //     event.preventDefault()
        //     Swal.fire({
        //         title: "Are you sure?",
        //         text: "You won't be able to revert this!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Yes, delete it!"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             window.location.href = url;
        //         }
        //     });
        // }
    </script>

</body>

</html>
