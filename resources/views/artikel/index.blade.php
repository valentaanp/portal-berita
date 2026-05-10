<x-layout>
    <x-slot:title>Berita Terkini - Portal Resmi</x-slot:title>

    <div class="max-w-7xl mx-auto">
        <header class="mb-12">
            <h1 class="text-4xl font-extrabold text-slate-900 border-l-8 border-yellow-500 pl-4">
                Warta Instansi
            </h1>
            <p class="text-slate-500 mt-2 text-lg italic">Menyajikan informasi transparan dan akuntabel bagi masyarakat.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Loop data dari database --}}
            @forelse ($artikels as $artikel)
                <x-artikel-card :artikel="$artikel" />
            @empty
                <p class="col-span-full text-center text-slate-500">Belum ada artikel yang diterbitkan.</p>
            @endforelse
        </div>
    </div>
</x-layout>