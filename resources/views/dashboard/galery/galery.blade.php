<x-layouts.main>
    <x-slot:title>{{ $title }}</x-slot:title>
    @if (Auth::User()->galery->isEmpty())
        <div class="text-center m-auto">
            <h4>Kamu belum membuat Galeri! Ayo buat sekarang juga</h4>
            <a href="{{ route('dashboard-galery-create') }}" class="btn btn-info">Buat Galery</a>
        </div>
    @else
        <div class="nk-content-wrap">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Galleri Anda</h3>
                        <div class="nk-block-des text-soft">
                            <p>Saat ini amu mempunyai {{ $galery }} galery, ingat galery yang anda buat ini bisa
                                dilihat oleh
                                public</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <a href="{{ route('dashboard-galery-create') }}"
                            class="btn btn-outline-primary d-none d-sm-inline-flex"><em
                                class=" icon ni ni-plus"></em><span>Tambah Galeri</span></a>
                        <a href="{{ route('dashboard-galery-create') }}"
                            class="btn btn-icon btn-outline-primary d-inline-flex d-sm-none"><em
                                class=" icon ni ni-plus"></em></a>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            @if (Session::has('success'))
                <div class="alert alert-info">
                    <div class="">{{ Session::get('success') }}</div>
                </div>
            @endif
            <div class="nk-block">
                <div class="row g-gs">
                    {{-- foreach --}}
                    @php $number = 1; @endphp
                    <div class="col-12">
                        <div class="card card-bordered card-full">
                            <div class="card-inner p-0 border-top">
                                <div class="nk-tb-list nk-tb-orders">
                                    <div class="nk-tb-item nk-tb-head">
                                        <div class="nk-tb-col">
                                            <span>No</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span>Title</span>
                                        </div>
                                        <div class="nk-tb-col tb-col-lg">
                                            <span>Content</span>
                                        </div>
                                        <div class="nk-tb-col">
                                            <span>Action</span>
                                        </div>
                                    </div>
                                    @foreach ($galeries as $galery)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">{{ $number++ }}</a></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub">{{ $galery->title }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-lg">
                                                <span class="tb-sub text-primary"><img
                                                        src="{{ asset('storage/' . $galery->image) }}" alt=""
                                                        width="100"></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="dropdown">
                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                                        data-bs-toggle="dropdown"><em
                                                            class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-plain">
                                                            <li><a
                                                                    href="{{ route('dashboard-galery-edit', $galery->id) }}">Edit</a>
                                                            </li>
                                                            <li><a
                                                                    href="{{ route('dashboard-galery-destroy', $galery->id) }}">Hapus</a>
                                                            </li>
                                                            <li><a href="#">View</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- .card -->
                    </div>
                    {{-- @foreach ($galeries as $galery)
                        <div class="col-sm-6 col-12">
                            <div class="gallery card card-bordered w-100 overflow-hidden h-auto object-cover"
                                style="max-height: 500px">
                                <a class="gallery-image popup-image" href="{{ asset('storage/' . $galery->image) }}">
                                    <img class="w-100 rounded-top"
                                        style="object-fit: cover; width: 100%; height: 300px;"
                                        src="{{ asset('storage/' . $galery->image) }}" alt="">
                                </a>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <p class="mx-lg-2 mx-md-2 mx-sm-2 mx-1 py-1 mb-0 pb-0 fw-bold ff-base ">
                                        {{ $galery->title }}</p>
                                    <div class="drodpown">
                                        <a href="#"
                                            class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="{{ route('dashboard-galery-edit', $galery->id) }}"><em
                                                            class="icon ni ni-edit"></em><span>Edit
                                                            Galeri</span></a></li>
                                                <li><a href="{{ route('dashboard-galery-destroy', $galery->id) }}"><em
                                                            class="icon ni ni-trash"></em><span>Delete
                                                            Galeri</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
                    {{-- end foreach --}}
                </div>
            </div><!-- .nk-block -->
        </div>
    @endif
</x-layouts.main>
