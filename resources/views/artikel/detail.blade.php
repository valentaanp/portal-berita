@php
    $artikel = (object)[
        'judulBerita' => 'Digitalisasi Layanan Publik Mencapai 90% Tahun Ini',
        'isiBerita' => 'Jakarta - Instansi pemerintah hari ini secara resmi mengumumkan pencapaian besar dalam program transformasi digital. Dalam kurun waktu satu tahun, lebih dari 90% layanan administratif kini dapat diakses secara daring melalui portal terpadu. Hal ini bertujuan untuk meminimalisir birokrasi yang panjang dan meningkatkan transparansi kerja pemerintah. "Kami ingin masyarakat merasakan kehadiran negara melalui genggaman ponsel mereka," ujar Pimpinan instansi saat diwawancarai pagi tadi.',
        'tanggalPublikasi' => '12 Mei 2026',
        'statusPublikasi' => 'Published',
        'penulis' => 'Budi Santoso',
        'kategori' => 'Teknologi',
        'gambar' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=1200&q=80'
    ];
@endphp

<x-layout>
    <x-slot:title>{{ $artikel->judulBerita }}</x-slot:title>

    <article class="max-w-4xl mx-auto bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <img src="{{ $artikel->gambar }}" class="w-full h-96 object-cover" alt="Banner Berita">
        
        <div class="p-10">
            <div class="mb-6">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">{{ $artikel->kategori }}</span>
                <h1 class="text-4xl font-black text-slate-900 mt-2 leading-tight">
                    {{ $artikel->judulBerita }}
                </h1>
                <div class="mt-6 flex items-center p-4 bg-slate-50 rounded-lg">
                    <div class="flex-shrink-0 h-10 w-10 bg-blue-900 rounded-full flex items-center justify-center text-white font-bold">
                        {{ substr($artikel->penulis, 0, 1) }}
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-bold text-slate-800">{{ $artikel->penulis }}</p>
                        <p class="text-xs text-slate-500">Dipublikasikan pada {{ $artikel->tanggalPublikasi }}</p>
                    </div>
                    <div class="ml-auto">
                        <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-bold uppercase">
                            {{ $artikel->statusPublikasi }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="prose prose-slate lg:prose-xl max-w-none text-slate-700 leading-relaxed text-lg">
                {{ $artikel->isiBerita }}
            </div>

            <div class="mt-12 pt-8 border-t border-slate-100 flex justify-between items-center">
                <a href="#" class="text-blue-600 font-bold hover:underline">← Kembali ke Berita Lainnya</a>
                <div class="flex space-x-4">
                    <span class="text-slate-400">Bagikan:</span>
                    <button class="text-slate-600 hover:text-blue-600">FB</button>
                    <button class="text-slate-600 hover:text-blue-400">TW</button>
                </div>
            </div>
        </div>
    </article>
</x-layout>