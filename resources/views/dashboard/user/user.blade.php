<x-layouts.main>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h2>User</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, quos!</p>
    <a href="{{ route('dashboard-user-create') }}"
        class="btn btn-primary bg-white col-2 col-lg-1 p-1 fs-md-6 rounded mb-2 justify-center">Create</a> --}}
    <div class="nk-block-between g-3 mb-3">
        <div class="nk-block-head-content">
            <h3 class="nk-block-title page-title">User yang terdaftar</h3>
            <div class="nk-block-des text-soft">
                <p><span class="fw-bold">Halo admin.</span> Saat ini user yang sudah terdaftar ada {{ $users->count() }}
                </p>
            </div>
        </div>
        <div class="nk-block-head-content">
            <a href="{{ route('dashboard-user-create') }}" class="btn btn-outline-primary d-none d-sm-inline-flex"><em
                    class=" icon ni ni-plus"></em><span>Tambah User</span></a>
            <a href="{{ route('dashboard-user-create') }}"
                class="btn btn-icon btn-outline-primary d-inline-flex d-sm-none"><em class=" icon ni ni-plus"></em></a>
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
                        <div class="nk-tb-col tb-col-sm">
                            <span>Fullname</span>
                        </div>
                        <div class="nk-tb-col">
                            <span>Username</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>Email</span>
                        </div>
                        <div class="nk-tb-col">
                            <span>Action</span>
                        </div>
                    </div>
                    @foreach ($users as $user)
                        @if ($user->id !== Auth::user()->id)
                            <div class="nk-tb-item">
                                <div class="nk-tb-col">
                                    <span class="tb-lead"><a href="#">{{ $number++ }}</a></span>
                                </div>
                                <div class="nk-tb-col tb-col-sm">
                                    <div class="user-card">
                                        <div class="user-name">
                                            <span class="tb-lead">{{ $user->name }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-tb-col">
                                    <span class="tb-sub">{{ $user->username }}</span>
                                </div>
                                <div class="nk-tb-col tb-col-lg">
                                    <span class="tb-sub text-primary">{{ $user->email }}</span>
                                </div>
                                <div class="nk-tb-col">
                                    <div class="dropdown">
                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger"
                                            data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                            <ul class="link-list-plain">
                                                <li><a href="{{ route('dashboard-user-edit', $user->id) }}">Edit</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('dashboard-user-destroy', $user->id) }}">Hapus</a>
                                                </li>
                                                <li><a href="#">View</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- .card -->
    </div>

    {{-- <table class="table table-dark">
        @php $number = 1; @endphp
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Full Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                @if ($user->id !== Auth::user()->id)
                    <tr class="">
                        <td class="fw-bold">{{ $number++ }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('dashboard-user-edit', $user->id) }}"
                                class="btn-info p-1 rounded">Update</a>
                            <a href="{{ route('dashboard-user-destroy', $user->id) }}"
                                class="btn-warning p-1 rounded">Delete</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table> --}}
</x-layouts.main>
