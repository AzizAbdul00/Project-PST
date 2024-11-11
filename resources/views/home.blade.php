<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="nk-content-wrap mt-2 mt-xl-2">
        {{-- <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Welcome {{ Auth::user()->name }}</h3>
                    <div class="nk-block-des text-soft">
                        <p>Welcome to PixelPerfect 🤩</p>
                    </div>
                </div>
            </div>
            <!-- .nk-block-between -->
        </div> --}}
        <!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <!-- Hero -->
                <div class="col-xl-12 mb-3" data-aos="fade-in" data-aos-delay="700">
                    <div class="row">
                        <div class="col-xl-6 m-auto col-12">
                            <div class="title-hero container p-5 p-lg-0" style="text-align: justify">
                                <h3><span style="color: #5664D9">Pengalaman</span> yang luar biasa dengan kualitas yang
                                    terbaik</h3>
                                <p>Harapan anda adalah tugas terbaik bagi kami untuk mewujudkan nya, dan dengan senang
                                    hati kami mengerjakannya!</p>
                                <a href="https://wa.me/+6285723157891" class="btn btn-primary"><em
                                        class="icon ni ni-call"></em><span>Contact</span></a>
                            </div>
                        </div>
                        <div class="col-xl-6 d-xl-block d-none m-auto" style="right: 0">
                            <div class="image-hero">
                                <img src="{{ asset('image/p2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero -->

                {{-- Why memilih kami? --}}
                <div class="col-xl-12 pb-5" id="why">
                    <div class="row">
                        <div class="d-block">
                            <div class="col-lg-12 container" data-aos="fade-up" data-aos-duration="1000">
                                <div class="header-title text-center">
                                    <h3>Kenapa harus memilih kami?</h3>
                                    <p>Mari kita lihat beberapa keunggulan yang kami miliki untuk memuwujudkan harapan
                                        anda</p>
                                </div>
                            </div>
                            <div class="col-lg-12 container py-5">
                                <div class="col-12 d-lg-flex" data-aos="fade-left" data-aos-duration="1000">
                                    <div class="col-lg-6 m-auto mx-lg-2 mx-1">
                                        <h3>Profesional</h3>
                                        <p>Tim kami semua Profesional dalam bidangnya, dan sudah terverifikasi atau
                                            mendapatkan sertifikat dari perlombaan. ada sebanyak 6 anggota profesional,
                                            dan setiap anggota memegang bidangnya masing masing.
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <img src="https://img.freepik.com/free-photo/smiling-positive-brunette-female-eyeglasses-taking-pictures-with-professional-photo-camera-isolated-grey-background_613910-7154.jpg?t=st=1723693586~exp=1723697186~hmac=f3a67da272337264c0eae89ad983b901a5331f943d3d4a1c34c7fd90e886ec8d&w=826"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 container">
                                <div class="col-12 d-lg-flex" data-aos="fade-right" data-aos-duration="1000">
                                    {{-- md kebawah --}}
                                    <div class="col-lg-6 m-auto mx-1 d-md-block d-lg-none">
                                        <h3>Alat yang canggih</h3>
                                        <p>Kita memiliki semua alat yang di butuhkan dalam, tentu dengan yang sudah
                                            canggih dan modern seerta siap bertempur di medan yang akan menerjang.</p>
                                    </div>

                                    <div class="col-lg-6">
                                        <img src="https://img.freepik.com/free-photo/medium-shot-specialized-photographer-working-studio_23-2150247251.jpg?t=st=1723694938~exp=1723698538~hmac=e786f75b293a0d55f95fe4aec41ae3d5965e48cc06d5551460745d8f1586b45c&w=826"
                                            alt="">
                                    </div>

                                    {{-- large --}}
                                    <div class="col-lg-6 m-auto mx-lg-2 d-none d-lg-block">
                                        <h3>Alat yang canggih</h3>
                                        <p>Kita memiliki semua alat yang di butuhkan dalam, tentu dengan yang sudah
                                            canggih dan modern seerta siap bertempur di medan yang akan menerjang.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Why memilih kami? end --}}

                {{--  Coll About --}}
                <div class="col-12-xl py-5" id="about">
                    <div class="row">
                        <div class="m-auto d-block" data-aos="fade-up" data-aos-duration="1000">
                            <div class="title text-center mb-lg-4">
                                <h3>Tetang Kami</h3>
                                <p class="w-80 m-auto">Inilah adalah pendiri sekaligus tim kami yang sudah sampe sejauh
                                    ini, dari awal sampe sekarang kita bersama sama. Dan kami percaya "Bersatu adalah
                                    awal, tetap bersama adalah kemajuan, bekerja bersama adalah kesuksesan."</p>
                            </div>
                            <div class="image text-center w-90 m-auto">
                                <img src="https://img.freepik.com/free-photo/group-cheerful-young-casually-dressed-men-women-posing_1098-20662.jpg?t=st=1726556249~exp=1726559849~hmac=16cb4e89cfc4eab5441f8267b72eac05554ddcf9397b7b00acea2bcc7ddac015&w=826"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{--  Coll About End --}}



                {{-- Coll Teams --}}
                <div class="col-xl-12 pt-3" id="teams">
                    <div class="row">
                        <div class="title text-center w-80 w-lg-100 m-auto" data-aos="fade-up" data-aos-duration="1000">
                            <h3>Siapa aja tim nya?</h3>
                            <p>Tim kami terdiri dari 6 orang yang luar biasa, kita dari awal sampe sekarang tidak pernah
                                terpisah, selalu dan masih dengan orang yang sama, bagi kami ini adalah keluarga yang
                                saling melengkapi.
                            </p>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 p-3 d-block" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="100">
                            <div class="d-block">
                                <div class="image w-80 m-auto">
                                    <img class="rounded img-about"
                                        src="https://img.freepik.com/premium-photo/happy-indonesian-government-employees-standing-getting-idea-isolated-white-background_571811-3383.jpg?w=826"
                                        alt="">
                                </div>
                                <div class="title mt-xl-3 text-center d-block mt-3">
                                    <h4 class="m-0 fw-medium">Dadat S.Kom. CIO</h4>
                                    <p class="w-70 p-0 m-auto ff-base">Orang yang selalu mencairkan suasana, skil
                                        ediornya jago
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 p-3 d-block" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="d-block">
                                <div class="image w-80 m-auto">
                                    <img class="rounded img-about"
                                        src="https://img.freepik.com/free-photo/lifestyle-beauty-fashion-people-emotions-concept-young-asian-female-office-manager-ceo-with-pleased-expression-standing-white-background-smiling-with-arms-crossed-chest_1258-59329.jpg"
                                        alt="">
                                </div>
                                <div class="title mt-xl-3 text-center d-block mt-3">
                                    <h4 class="m-0 fw-medium">Hely S.Kom. CEO</h4>
                                    <p class="w-70 p-0 m-auto ff-base">Manajemen perusahaan dan selalu mengajak kerja
                                        sama
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 p-3 d-block" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <div class="d-block">
                                <div class="image w-80 m-auto">
                                    <img class="rounded img-about"
                                        src="https://img.freepik.com/free-photo/portrait-excited-young-asian-woman-office-lady-pointing-fingers-left-discount-showing-sale-banner-standing-white-background_1258-89505.jpg?t=st=1724038079~exp=1724041679~hmac=9d39c3f8fd4a60ab7cf6869aea39a4d5cc79ea6a4ee03ad30c7ef09bb6074621&w=826"
                                        alt="">
                                </div>
                                <div class="title mt-xl-3 text-center d-block mt-3">
                                    <h4 class="m-0 fw-medium">Indah S.Ak. CIO</h4>
                                    <p class="w-70 p-0 m-auto ff-base">Editor yang sangat handal dan tepat waktu terus
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 p-3 d-block" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="100">
                            <div class="d-block">
                                <div class="image w-80 m-auto">
                                    <img class="rounded img-about"
                                        src="https://img.freepik.com/free-photo/positive-asian-man-pointing-finger-aside_1262-18275.jpg?t=st=1724038260~exp=1724041860~hmac=683547cb6679409548538082a56e24ae13baf906af965092ad009a6cc36590d4&w=826"
                                        alt="">
                                </div>
                                <div class="title mt-xl-3 text-center d-block mt-3">
                                    <h4 class="m-0 fw-medium">Arnald Sibastian</h4>
                                    <p class="w-70 p-0 m-auto ff-base">Photograper yang jagonya mirip dengan pak dadang
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 p-3 d-block" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="d-block">
                                <div class="image w-80 m-auto">
                                    <img class="rounded img-about"
                                        src="https://img.freepik.com/premium-photo/man-tan-shirt-holding-hand-up_116547-128521.jpg?w=826"
                                        alt="">
                                </div>
                                <div class="title mt-xl-3 text-center d-block mt-3">
                                    <h4 class="m-0 fw-medium">Dadang Eko</h4>
                                    <p class="w-70 p-0 m-auto ff-base">Salah satu photographer kami yang lebih tua dari
                                        yang lain
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-12 p-3 d-block" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <div class="d-block">
                                <div class="image w-80 m-auto">
                                    <img class="rounded img-about"
                                        src="https://img.freepik.com/free-photo/excited-beautiful-asian-girl-blue-pajamas-pointing-finger-left-smiling-enthusiastic-showing-awesome-promo-banner-telling-about-product-making-announcement-white-background_1258-64083.jpg?t=st=1724038725~exp=1724042325~hmac=7950920595fde4a1d797446f8c92089df8d3644ac651bbfd468868ba810f5168&w=826"
                                        alt="">
                                </div>
                                <div class="title mt-xl-3 text-center d-block mt-3">
                                    <h4 class="m-0 fw-medium">Eliano Sabatilo</h4>
                                    <p class="w-70 p-0 m-auto ff-base">Orang marketing yang jago memasarkan produk
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Coll Teams end --}}

            </div>
            <!-- .row -->
        </div>
        <!-- .nk-block -->
    </div>
</x-layout>
