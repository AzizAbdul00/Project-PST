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
                                                <h2 class="nk-block-title fw-normal">Tambah Galeri</h2>
                                                <div class="nk-block-des">
                                                    <p class="lead">Ayo membuat galery untuk di liat oleh public</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-sub"><a class="back-to"
                                                href="{{ route('dashboard-galery') }}"><em
                                                    class="icon ni ni-arrow-left"></em><span>Kembali</span></a>
                                        </div>
                                        <!-- .nk-block -->
                                        <div class="nk-block nk-block-lg">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-head">
                                                        <h5 class="card-title">Galeri</h5>
                                                    </div>
                                                    <form action="{{ route('dashboard-galery-store') }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row g-4">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="title">Judul</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text"
                                                                            class="form-control @error('title') is-invalid @enderror"
                                                                            id="title" name="title"
                                                                            value="{{ old('title') }}">
                                                                        @error('title')
                                                                            <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="image">Foto</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="file" name="image"
                                                                            class="form-control @error('image') is-invalid @enderror"
                                                                            id="image" size="50"
                                                                            width="">
                                                                        @error('image')
                                                                            <p class="text-danger">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                        class="btn btn-lg btn-primary">Tambah
                                                                        Galeri</button>
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
