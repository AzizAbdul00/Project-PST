<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @if ($galeries->count() === 0)
        <div class="m-auto items-center text-center">
            <h3>Maaf saat ini galery tidak tersedia</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ipsa soluta officiis!</p>
        </div>
    @else
        <div class="nk-content-wrap">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between g-3">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Galleri Public</h3>
                        <div class="nk-block-des text-soft">
                            <p>Saat ini galery tersedia hanya {{ $galeries->count() }}, cobalah
                                membuat galery anda untuk di liat oleh public.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .nk-block-head -->
            @if (Session::has('success'))
                <div class="alert alert-info">
                    <div class="">{{ Session::get('success') }}</div>
                </div>
            @endif
            <div class="nk-block">
                <div class="row g-gs">
                    {{-- foreach --}}
                    @foreach ($galeries as $galery)
                        <div class="col-sm-6 col-lg-4 col-12">
                            <div class="gallery card card-bordered w-100 overflow-hidden h-auto object-cover"
                                style="max-height: 500px">
                                <a class="gallery-image popup-image" href="{{ asset('storage/' . $galery->image) }}">
                                    <img class="w-100 rounded-top"
                                        style="object-fit: cover; width: 100%; height: 300px;"
                                        src="{{ asset('storage/' . $galery->image) }}" alt="">
                                    {{-- style="width: 100%; height: auto; object-fit: cover" --}}
                                </a>
                                <p class="mx-lg-2 mx-md-2 mx-sm-2 mx-1 py-1 mb-0 pb-0 fw-bold ff-base ">
                                    {{ $galery->title }}</p>
                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                    <div class="user-card">
                                        <div class="user-avatar sq bg-purple">
                                            <span>{{ $galery->initials }}</span>
                                        </div>
                                        <div class="user-info">
                                            <a href="{{ route('profile', $galery->author->username) }}">
                                                <span class="lead-text">{{ $galery->author->name }}</span>
                                                <span class="sub-text">{{ $galery->author->username }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    @if (Auth::User()->id != $galery->author->id)
                                        <div class="drodown">
                                            <a href="#"
                                                class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ 404 }}"><em
                                                                class="icon ni ni-alert"></em><span>Repot
                                                                Galery</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @else
                                        <div class="drodpown">
                                            <a href="#"
                                                class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('galery-destroy', $galery->id) }}"
                                                            onclick="return confirm('are you seriursly?')"><em
                                                                class="icon ni ni-trash"></em><span>Delete
                                                                Galery</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- end foreach --}}
                </div>
            </div><!-- .nk-block -->
        </div>
    @endif
</x-layout>
