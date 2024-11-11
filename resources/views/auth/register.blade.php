<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('image/land-removebg.png') }}">
    <!-- Page Title  -->
    <title>Register | PixelPerfect</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('demo4/src/assets/css/dashlite.css?ver=3.0.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('demo4/src/assets/css/theme.css?ver=3.0.3') }}">
    {{-- bootstrap --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link mt-4">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('image/land.png') }}"
                                    srcset="{{ asset('image/land.png') }}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Register</h4>
                                        <div class="nk-block-des">
                                            <p class="text-soft">Buat akun untuk masuk ke PixelPerfect</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('registerProses') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="name">Nama</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" name="name"
                                                id="name" placeholder="Masukan nama anda"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <p class="ff-italic text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="username">Username</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" name="username"
                                                id="username" placeholder="Masukan username anda"
                                                value="{{ old('username') }}">
                                            @error('username')
                                                <p class="ff-italic text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" name="email"
                                                id="email" placeholder="Masukan email anda"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <p class="ff-italic text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-lg" name="password"
                                                id="password" placeholder="password">
                                            @error('password')
                                                <p class="ff-italic text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to Dashlite <a
                                                    href="#">Privacy Policy</a> &amp; <a href="#">
                                                    Terms.</a></label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> Sudah punya akun? <a
                                        href="{{ route('login') }}"><strong>Login aja sekarang</strong></a>
                                </div>
                                {{-- <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-8">
                                    <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
    {{-- bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script> --}}

</html>
