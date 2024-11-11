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
    <title>Login | PixelPerfect</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('demo4/src/assets/css/dashlite.css?ver=3.0.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('demo4/src/assets/css/theme.css?ver=3.0.3') }}">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('image/land.png') }}"
                                    srcset="{{ asset('image/land.png') }}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title ">Login</h4>
                                        <div class="nk-block-des">
                                            <p class="text-soft">Untuk masuk website kami, harap login terlebih dahulu
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('loginProses') }}" method="POST">
                                    @csrf

                                    @if (Session::has('failed'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ Session::get('failed') }}</strong> Silahkan coba lagi.
                                        </div>
                                    @endif

                                    @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            <div class="text-muted">{{ Session::get('success') }}</div>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" name="email"
                                                id="email" placeholder="Masukan email yang sudah terdaftar"
                                                value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                            <p class="ff-italic text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-lg" name="password"
                                                id="password" placeholder="Masukan password">
                                        </div>
                                        @error('password')
                                            <p class="ff-italic text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Login</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4">Tidak punya akun? <a
                                        href="{{ route('register') }}">Register disini</a>
                                </div>
                                {{-- <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div> --}}
                                {{-- <ul class="nav justify-center gx-4">
                                    <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                                </ul> --}}
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
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
    <!-- select region modal -->

</html>
