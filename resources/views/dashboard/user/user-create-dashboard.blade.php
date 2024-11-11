<x-layouts.layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="components-preview wide-md mx-auto">
                                        <div class="nk-block-head nk-block-head-lg wide-sm pb-3">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">Add User</h2>
                                                <div class="nk-block-des">
                                                    <p class="lead">Silahkan tambah user baru sesuai kebutuhan anda,
                                                        jangan asal menambah saja.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-sub"><a class="back-to" href="/user"><em
                                                    class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        </div>
                                        <!-- .nk-block -->
                                        <div class="nk-block nk-block-lg">
                                            {{-- <div class="nk-block-head">
                                                    <div class="nk-block-head-content">
                                                        <h4 class="title nk-block-title">Basic Form Style - S2</h4>
                                                        <div class="nk-block-des">
                                                            <p>You can alow display form in column as example below.</p>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-head">
                                                        <h5 class="card-title">Data pengguna</h5>
                                                    </div>
                                                    <form action="{{ route('dashboard-user-store') }}" method="post">
                                                        @csrf
                                                        <div class="row g-4">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="name">Full
                                                                        Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text"
                                                                            class="form-control @error('name') is-invalid @enderror"
                                                                            id="name" name="name"
                                                                            placeholder="@error('name') {{ $message }} @else fullname @enderror"
                                                                            value="{{ old('name') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="username">Username</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="username"
                                                                            class="form-control @error('username') is-invalid @enderror"
                                                                            id="username"
                                                                            placeholder="@error('username') {{ $message }} @else username @enderror"
                                                                            value="{{ old('username') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email">Email
                                                                        address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text"
                                                                            class="form-control @error('email') is-invalid @enderror"
                                                                            id="email" name="email"
                                                                            placeholder="@error('email') {{ $message }} @else email @enderror"
                                                                            value="{{ old('email') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="password">Password</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="password"
                                                                            class="form-control @error('password') is-invalid @enderror"
                                                                            id="password" name="password"
                                                                            placeholder="@error('password') {{ $message }} @else password @enderror">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-primary">Tambah</button>
                                                                    <button class="btn btn-lg btn-info">
                                                                        <a href="{{ route('dashboard-user') }}"
                                                                            class="text-white">
                                                                            Kembali</a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .nk-block -->
                                    </div>
                                    <!-- .components-preview -->
                                </div>
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
</x-layouts.layouts>
<!-- app-root @e -->
