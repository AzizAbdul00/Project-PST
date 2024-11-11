<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="nk-content-wrap">
        <div class="nk-block-head">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">List Pengguna</h3>
                    <div class="nk-block-des text-soft">
                        <p>Saat ini terdapat {{ $users->count() }} pengguna yang ada</p>
                    </div>
                </div><!-- .nk-block-head-content -->

                {{-- <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em
                                class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li><a href="{{ route('createUser') }}" class="btn btn-outline-primary"><em
                                            class="icon ni ni-plus"></em><span>Add User</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- .toggle-wrap -->
                </div>
                <!-- .nk-block-head-content --> --}}

            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                <div class="text-muted">{{ Session::get('success') }}</div>
            </div>
        @endif
        <div class="nk-block">
            {{-- <div class="card card-bordered card-stretch">
                <div class="card-inner-group">
                    <div class="card-inner position-relative card-tools-toggle">
                        <div class="card-title-group">
                            <div class="card-tools">
                                <div class="form-inline flex-nowrap gx-3">
                                    <div class="form-wrap w-150px">
                                        <select class="form-select js-select2" data-search="off"
                                            data-placeholder="Bulk Action">
                                            <option value="">Bulk Action</option>
                                            <option value="email">Send Email</option>
                                            <option value="group">Change Group</option>
                                            <option value="suspend">Suspend User</option>
                                            <option value="delete">Delete User</option>
                                        </select>
                                    </div>
                                    <div class="btn-wrap">
                                        <span class="d-none d-md-block"><button
                                                class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                        <span class="d-md-none"><button
                                                class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                    class="icon ni ni-arrow-right"></em></button></span>
                                    </div>
                                </div><!-- .form-inline -->
                            </div>
                            <!-- .card-tools -->
                            <div class="card-tools me-n1">
                                <ul class="btn-toolbar gx-1">
                                    <li>
                                        <a href="#" id="submit-search"
                                            class="btn btn-icon search-toggle toggle-search" data-target="search"><em
                                                class="icon ni ni-search"></em></a>
                                    </li>
                                </ul><!-- .btn-toolbar -->
                            </div>
                            <!-- .toggle-content -->
                        </div><!-- .toggle-wrap -->
                        </li><!-- li -->
                        </ul><!-- .btn-toolbar -->
                    </div><!-- .card-tools -->
                </div><!-- .card-title-group -->
                <form>
                    <div class="card-search search-wrap" data-search="search">
                        <div class="card-body">
                            <div class="search-content">
                                <a href="#" class="search-back btn btn-icon toggle-search"
                                    data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                <input type="search" name="search" id="search"
                                    class="form-control border-transparent form-focus-none"
                                    placeholder="Search by Name user">
                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                            </div>
                        </div>
                    </div>
                    <!-- .card-search -->
                </form>
            </div><!-- .card-inner --> --}}
            <form>
                <div class="w-100 m-auto mb-4">
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded shadow p-2 me-2" autofocus="active"
                            placeholder="Search user by name" aria-label="Search" aria-describedby="search-addon"
                            name="search" id="search" value="{{ request('search') }}" />
                        <button class="border-0 px-3 rounded">
                            <i class="icon ni ni-search"></i>
                        </button>
                        {{-- <input type="search" class="rounded"> --}}
                    </div>
                </div>
            </form>
            <div class="card-inner p-0">
                <div class="nk-tb-list nk-tb-ulist">
                    <div class="nk-tb-item nk-tb-head">
                        {{-- <div class="nk-tb-col nk-tb-col-check"> --}}
                        {{-- <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid">
                                <label class="custom-control-label" for="uid"></label>
                            </div> --}}
                        {{-- </div> --}}
                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
                        <div class="nk-tb-col tb-col-mb"><span class="sub-text">Username</span></div>
                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></div>
                        {{-- <div class="nk-tb-col tb-col-xl"><span class="sub-text">Akun Dibuat</span></div>
                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Verified</span></div> --}}
                        <div class="nk-tb-col tb-col-mb"><span class="sub-text"></span></div>
                    </div>
                    <!-- .nk-tb-item -->
                    @foreach ($users as $user)
                        @if ($user->id !== auth()->user()->id)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col">
                                    <a href="{{ route('profile', $user->username) }}">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary ">
                                                <span>{{ $user->initials }}</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="tb-lead">{{ $user->name }}
                                                    @if ($user->email_verified_at === null)
                                                        <span class="dot dot-danger d-md-none ms-1"></span>
                                                    @else
                                                        <span class="dot dot-success d-md-none ms-1"></span>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nk-tb-col tb-col-mb">
                                    <span class="tb-amount">{{ $user->username }}</span>
                                </div>
                                <div class="nk-tb-col tb-col-md">
                                    <span>{{ $user->email }}</span>
                                </div>
                                {{-- <div class="nk-tb-col tb-col-xl">
                                    <span>{{ $user->created_at->diffForHumans() }}</span>
                                </div>
                                @if ($user->email_verified_at === null)
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-danger">Pending</span>
                                    </div>
                                @else
                                    <div class="nk-tb-col tb-col-md">
                                        <span class="tb-status text-success">Success</span>
                                    </div>
                                @endif --}}
                                <div class="nk-tb-col nk-tb-col-tools">
                                    <ul class="nk-tb-actions gx-1">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger"
                                                    data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="{{ route('profile', $user->username) }}"><em
                                                                    class="icon ni ni-eye"></em><span>View
                                                                    Details</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- .nk-tb-item -->


                </div><!-- .nk-tb-list -->
            </div><!-- .card-inner -->
            <div class="card-inner">
                <div class="nk-block-between-md g-3 justify-content-center">
                    <div class="g">
                        <ul class="pagination justify-content-center justify-content-md-start">
                            {{ $users->links() }}
                        </ul><!-- .pagination -->
                    </div>
                    <!-- .pagination-goto -->
                    <!-- .pagination-goto end -->
                </div><!-- .nk-block-between -->
            </div><!-- .card-inner -->
        </div><!-- .card-inner-group -->
    </div><!-- .card -->
    </div><!-- .nk-block -->
    </div>
</x-layout>
