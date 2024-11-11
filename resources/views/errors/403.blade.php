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
    <link rel="shortcut icon" href="{{ asset('demo4/src/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Error 404 | PixelPerfect</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('demo4/src/assets/css/dashlite.css?ver=3.0.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('demo4/src/assets/css/theme.css?ver=3.0.3') }}">
</head>

<body class="nk-body bg-white npc-default pg-error">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle wide-xs mx-auto">
                        <div class="nk-block-content nk-error-ld text-center">
                            <h1 class="nk-error-head">403</h1>
                            <h3 class="nk-error-title">Oops! Kamu tidak punya akses.</h3>
                            {{-- <p class="nk-error-text">Wah sory yak kamu di larang masuk karna ga punya akses</p> --}}
                            <a href="{{ route('home') }}" class="btn btn-lg btn-primary mt-2">Silahkan kembali</a>
                        </div>
                    </div><!-- .nk-block -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('demo4/src/assets/js/bundle.js?ver=3.0.3') }}"></script>
    <script src="{{ asset('demo4/src/assets/js/scripts.js?ver=3.0.3') }}"></script>
    <!-- select region modal -->

</html>
