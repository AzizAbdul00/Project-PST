<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Artikel Public</h3>
                    <div class="nk-block-des text-soft">
                        <p>Saat ini hanya {{ $posts->count() }} artikel yang tersedia.</p>
                    </div>
                </div>
            </div>
            <!-- .nk-block-between -->
        </div>
        <!-- .nk-block-head -->
        {{-- search --}}
        <form>
            <div class="w-100 m-auto mb-4">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded shadow p-2 me-2" autofocus="active"
                        placeholder="Search artikel by title" aria-label="Search" aria-describedby="search-addon"
                        name="search" id="search" value="{{ request('search') }}" />
                    <button class="border-0 px-3 rounded">
                        <i class="icon ni ni-search"></i>
                    </button>
                    {{-- <input type="search" class="rounded"> --}}
                </div>
            </div>
        </form>

        @if (request('search'))
            <div class="mb-2">
                <a href="{{ route('article') }}" class="fw-light fs-6 bg-info text-white p-1 rounded">&laquo;
                    Back</a>
            </div>
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <div class="text-muted">{{ Session::get('success') }}</div>
            </div>
        @endif

        <div class="nk-block">
            <div class="row g-gs">
                @foreach ($posts as $post)
                    <div class="col-sm-6 col-xl-4">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="project">
                                    <div class="project-head">
                                        <div class="project-title">
                                            <div class="user-avatar sq bg-purple">
                                                <span>{{ $post->initials }}</span>
                                            </div>
                                            <div class="project-info">
                                                <h6 class="title">
                                                    <a href="{{ route('article-show', $post->title) }}"
                                                        style="color: rgba(0, 0, 0, 0.7)">{{ $post->title }}</a>
                                                    {{-- {{ $post->title }} --}}
                                                </h6>
                                                <a href="{{ route('profile', $post->author->username) }}"><span
                                                        class="sub-text">{{ $post->author->name }}</span></a>
                                            </div>
                                        </div>
                                        <div class="drodown">
                                            <a href="#"
                                                class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 me-n1"
                                                data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    @if (auth()->user()->id == $post->author_id)
                                                        <li><a href="{{ route('article-show', $post->title) }}"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Article</span></a></li>
                                                        <li><a href="{{ route('article-destroy', $post->id) }}"
                                                                onclick="return confirm('Are you sare?')"><em
                                                                    class="icon ni ni-trash"></em><span>Delete
                                                                    Article</span></a></li>
                                                    @else
                                                        <li> <a href="{{ route('article-show', $post->title) }}"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Article</span></a></li>
                                                        <li><a href=""><em
                                                                    class="icon ni ni-alert"></em><span>Repots</span></a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-details">
                                        <p>{{ Str::limit($post->body, 137) }}</p>
                                    </div>
                                    <div class="project-meta">
                                        <span class="badge badge-dim bg-primary"><em {{-- class="icon ni ni-clock"></em><span>{{ $post->created_at->diffForHumans() }}</span></span> --}}
                                                class="icon ni ni-clock"></em><span>{{ $post->created_at->diffForHumans() }}</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- .nk-block -->
        <div class="m-auto my-3 justify-center">
            {{ $posts->links() }}
        </div>
    </div>
</x-layout>
