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
                                                <h2 class="nk-block-title fw-normal">Update User</h2>
                                                <div class="nk-block-des">
                                                    <p class="lead">Silahkan update user
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-sub"><a class="back-to" href="/user"><em
                                                    class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                        </div>
                                        <!-- .nk-block -->
                                        <div class="nk-block nk-block-lg">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-head">
                                                        <h5 class="card-title">Data pengguna</h5>
                                                    </div>
                                                    <form action="{{ route('dashboard-user-update', $user->id) }}"
                                                        method="post">
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
                                                                            value="{{ old('name', $user->name) }}">
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
                                                                            value="{{ old('username', $user->username) }}">
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
                                                                            value="{{ old('email', $user->email) }}">
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
                                                                            value="{{ $user->password }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-primary">Update</button>
                                                                    <button class="btn btn-lg btn-success">
                                                                        <a href="{{ route('dashboard-user') }}"
                                                                            class="text-white">Kembali</a>
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
