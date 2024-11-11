<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @if (Auth::user()->id !== $profile->id)
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Informasi Akun</h3>
                    <div class="nk-block-des">
                        <p>Profile pengguna by {{ $profile->name }}</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="html/user-profile-regular.html"><em
                                    class="icon ni ni-user-fill-c"></em><span>Profile</span></a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Personal Informasi Akun {{ $profile->name }}</h4>
                                <div class="nk-block-des">
                                    <p>Informasi ini yang user tampilkan untuk publik</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="nk-data data-list data-list-s2">
                                <div class="data-head">
                                    <h6 class="overline-title">Info</h6>
                                </div>
                                <!-- data-item -->
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Nama</span>
                                        <span class="data-value">{{ $profile->name }}</span>
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Username</span>
                                        <span class="data-value">{{ $profile->username }}</span>
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Bio</span>
                                        @if ($profile->bio !== null)
                                            <span class="data-value">{{ $profile->bio }}</span>
                                        @else
                                            <span class="data-value text-soft">-</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Address</span>
                                        @if ($profile->alamat !== null)
                                            <span class="data-value">{{ $profile->alamat }}</span>
                                        @else
                                            <span class="data-value text-soft">-</span>
                                        @endif
                                    </div>
                                </div>
                                <!-- data-item -->
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    @else
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Akun Saya</h3>
                    <div class="nk-block-des">
                        <p>Kamu bisa menambahkan Informasi tentang kamu sendiri</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->

            @if (Session::has('success'))
                <div class="alert alert-info">
                    <div class="">{{ Session::get('success') }}</div>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <p>Gagal memperbarui data silahkan coba lagi</p>
                </div>
            @endif

            <div class="nk-block">
                <div class="card card-bordered">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="html/user-profile-regular.html"><em
                                    class="icon ni ni-user-fill-c"></em><span>Profile</span></a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Personal Informasi Akun</h4>
                                <div class="nk-block-des">
                                    <p>Kamu bisa sesuka hati mengatur akun kamu sendiri</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="nk-data data-list data-list-s2">
                                <div class="data-head">
                                    <h6 class="overline-title">Info</h6>
                                </div>

                                {{-- <!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit-image">
                                    <div class="data-col">
                                        <span class="data-label">Poto Profile</span>
                                        @if (Auth::User()->image != null)
                                            <img src="{{ asset('storage/' . $profile->image) }}" alt=""
                                                width="100">
                                        @else
                                            <em class="icon ni ni-user-fill-c"></em>
                                        @endif
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span>
                                    </div>
                                </div> --}}

                                <!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Nama</span>
                                        <span class="data-value">{{ $profile->name }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span>
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Username</span>
                                        <span class="data-value">{{ $profile->username }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span>
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Bio</span>
                                        @if ($profile->bio !== null)
                                            <span class="data-value">{{ $profile->bio }}</span>
                                        @else
                                            <span class="data-value text-soft">-</span>
                                        @endif
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span>
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item">
                                    <div class="data-col">
                                        <span class="data-label">Email</span>
                                        <span class="data-value">{{ $profile->email }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more disable"><em
                                                class="icon ni ni-lock-alt"></em></span></div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">No telp</span>
                                        @if ($profile->telephone === null)
                                            <span class="data-value text-soft">-</span>
                                        @else
                                            <span class="data-value text-soft">{{ $profile->telephone }}</span>
                                        @endif
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span>
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit"
                                    data-tab-target="#address">
                                    <div class="data-col">
                                        <span class="data-label">Alamat</span>
                                        @if ($profile->alamat === null)
                                            <span class="data-value text-soft">-</span>
                                        @else
                                            <span class="data-value">{{ $profile->alamat }}</span>
                                        @endif
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span>
                                    </div>
                                </div>
                                <!-- data-item -->
                                <div class="data-item" data-bs-toggle="modal" data-bs-target="#profile-edit">
                                    <div class="data-col">
                                        <span class="data-label">Akun anda dibuat</span>
                                        <span
                                            class="data-value text-soft">{{ $profile->created_at->diffForhumans() }}</span>
                                    </div>
                                    <div class="data-col data-col-end"><span class="data-more"><em
                                                class="icon ni ni-forward-ios"></em></span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
        {{-- modal --}}
        <!-- @@ Profile Edit Modal @e -->
        <form action="{{ route('profile-update', $profile->username) }}" method="post">
            @method('PUT')
            @csrf
            <div class="modal fade" role="dialog" id="profile-edit">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <a href="#" class="close" data-bs-dismiss="modal"><em
                                class="icon ni ni-cross-sm"></em></a>
                        <div class="modal-body modal-body-lg">
                            <h5 class="title">Update Profile</h5>
                            <ul class="nk-nav nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                                </li>
                            </ul><!-- .nav-tabs -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="personal">
                                    <div class="row gy-4">
                                        {{-- full name target --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Full Name</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="name" id="name" value="{{ $profile->name }}"
                                                    placeholder="Enter Full name">
                                            </div>
                                        </div>
                                        {{-- username target --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" class="form-control form-control-lg"
                                                    name="username" id="username" value="{{ $profile->username }}"
                                                    placeholder="Enter username">
                                            </div>
                                        </div>
                                        {{-- Bio target --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="Bio">Bio</label>
                                                @if ($profile->bio !== null)
                                                    <input type="text" class="form-control form-control-lg"
                                                        name="bio" id="bio" value="{{ $profile->bio }}">
                                                @else
                                                    <input type="text" class="form-control form-control-lg"
                                                        name="bio" id="bio" placeholder="Bio Anda">
                                                @endif
                                            </div>
                                        </div>
                                        {{-- Phone Number target --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="telephone">Phone Number</label>
                                                @if ($profile->telephone !== null)
                                                    <input type="text" class="form-control form-control-lg"
                                                        name="telephone" id="telephone"
                                                        value="{{ $profile->telephone }}">
                                                @else
                                                    <input type="text" class="form-control form-control-lg"
                                                        name="telephone" id="telephone" value="+62"
                                                        placeholder="Phone Numbers">
                                                @endif
                                            </div>
                                        </div>
                                        {{-- Alamat target --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="alamat">Masukan Tempat Tiggal</label>
                                                @if ($profile->alamat !== null)
                                                    <input type="text" class="form-control form-control-lg"
                                                        name="alamat" id="alamat" value="{{ $profile->alamat }}"
                                                        placeholder="Tempat Tinggal">
                                                @else
                                                    <input type="text" class="form-control form-control-lg"
                                                        name="alamat" id="alamat" value=""
                                                        placeholder="Tempat Tinggal">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">
                                                        Update
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-dismiss="modal"
                                                        class="link link-light">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div><!-- .tab-content -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div><!-- .modal -->
        </form>


        <!-- @@ Profile Edit Modal @e -->
        {{-- <form action="{{ route('profile-update-image', $profile->username) }}" method="post"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal fade" role="dialog" id="profile-edit-image">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <a href="#" class="close" data-bs-dismiss="modal"><em
                                class="icon ni ni-cross-sm"></em></a>
                        <div class="modal-body modal-body-lg">
                            @if (Auth::User()->image != null)
                                <h5 class="title">Update Image</h5>
                            @else
                                <h5 class="title">Upload Image</h5>
                            @endif
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <div class="row gy-4">
                                        @if (Auth::User()->image !== null)
                                            <p class="m-0 p-0 ms-3">Gambar Lama</p>
                                            <img src="{{ 'storage/' . $profile->image }}" alt=""
                                                width="100" class="m-0">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Masukan Image
                                                        Baru</label>
                                                    <input type="file" class="form-control form-control-lg"
                                                        name="image" id="image" placeholder="image">
                                                </div>
                                            </div>
                                        @else
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Masukan Image</label>
                                                    <input type="file" class="form-control form-control-lg"
                                                        name="image" id="image" placeholder="image">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    @if (Auth::User()->image != null)
                                                        <button type="submit" class="btn btn-lg btn-primary">
                                                            Update
                                                        </button>
                                                    @else
                                                        <button type="submit" class="btn btn-lg btn-primary">
                                                            Upload
                                                        </button>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a href="#" data-bs-dismiss="modal"
                                                        class="link link-light">Cancel</a>
                                                </li>
                                                @if (Auth::User()->image != null)
                                                    <li>
                                                        <a
                                                            href="{{ route('profile-destroy-image', $profile->username) }}"><span
                                                                class="data-more"><em class="icon ni ni-trash"></em>
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form> --}}
    @endif
</x-layout>
