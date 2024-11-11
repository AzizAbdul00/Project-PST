<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Article By {{ $post->author->name }}</h3>
                    <div class="nk-block-des text-soft">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ducimus eligendi animi quaerat
                            eius.</p>
                    </div>
                </div>
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->

        <div class="col-xl-12 shadow p-3 rounded bg-white mt-xl-3">
            <div class="block">
                <div class="col-12 row justify-content-between items-center">
                    <div class="col-3">
                        <a href="{{ route('article') }}">&laquo; Back More</a>
                    </div>
                    <div class="col-9 text-end">
                        {{ $post->created_at->diffForHumans() }}
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="col-12 mb-1">
                        <h4>{{ $post->title }}</h4>
                    </div>
                    <p class="bg-info fs-6 fw-light rounded text-white w-auto d-inline p-1">
                        By : {{ $post->author->name }}
                    </p>
                    <div class="col-12 mt-2">
                        <p style="text-align: justify">{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
