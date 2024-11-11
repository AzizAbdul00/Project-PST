<x-layouts.main>
    <x-slot:title>{{ $title }}</x-slot:title>
    @if (Auth::User()->posts->isEmpty())
        <div class="text-center m-auto">
            <h4>Kamu belum membuat Article! Ayo buat sekarang juga</h4>
            <a href="{{ route('dashboard-article-create') }}" class="btn btn-info">Buat Article</a>
        </div>
    @else
        <div class="nk-block-between g-3 mb-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Artikel Anda</h3>
                <div class="nk-block-des text-soft">
                    <p>Saat ini kamu mempunyai {{ $posts->count() }} artikel, ingat artikel yang anda buat ini bisa
                        dilihat oleh
                        public</p>
                </div>
            </div>
            <div class="nk-block-head-content">
                <a href="{{ route('dashboard-article-create') }}"
                    class="btn btn-outline-primary d-none d-sm-inline-flex"><em
                        class=" icon ni ni-plus"></em><span>Tambah Article</span></a>
                <a href="{{ route('dashboard-article-create') }}"
                    class="btn btn-icon btn-outline-primary d-inline-flex d-sm-none"><em
                        class=" icon ni ni-plus"></em></a>
            </div>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-info" role="alert">
                <div class="">{{ Session::get('success') }}</div>
            </div>
        @endif

        @if (Session::has('failed'))
            <div class="alert alert-warning" role="alert">
                <div class="">{{ Session::get('failed') }}</div>
            </div>
        @endif
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
                        @foreach ($posts as $post)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col">
                                    <span class="tb-lead"><a href="#">{{ $number++ }}</a></span>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-sub">{{ $post->title }}</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-sub text-primary">{{ Str::limit($post->body, 60) }}</span>
                                </div>
                                <div class="nk-tb-col">
                                    <div class="dropdown">
                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                            <ul class="link-list-plain">
                                                <li><a href="{{ route('dashboard-article-edit', $post->id) }}">Edit</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('dashboard-article-destroy', $post->id) }}">Hapus</a>
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

    @endif
    {{-- <table class="table table-dark">
        @php $number = 1; @endphp
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr class="">
                    <td class="fw-bold">1</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->body, 50) }}</td>
                    <td>
                        <a href="{{ route('dashboard-article-edit', $post->id) }}"
                            class="btn-info p-1 rounded">Update</a>
                        <a href="{{ route('dashboard-article-destroy', $post->id) }}"
                            class="btn-warning p-1 rounded">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
</x-layouts.main>
