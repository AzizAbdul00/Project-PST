<x-layouts.main>
    <x-slot:title>Dashboard</x-slot:title>
    <div class="nk-content-wrap m-auto">
        <figure class="text-center">
            <h1 class="h3">Selamat Datang Di Halaman Dashboard Kita</h1>
            <blockquote class="blockquote">
                <h4>{{ Auth::User()->name }}</h4>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">Mau buat pengguna baru? article baru? atau galery baru?</cite>
            </figcaption>
        </figure>
        <div class="w-50 m-auto text-center">
            <a href="{{ route('dashboard-user') }}" class="btn btn-primary">Buat aja!</a>
        </div>
    </div>

</x-layouts.main>
