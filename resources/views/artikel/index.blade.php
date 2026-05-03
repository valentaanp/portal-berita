@php
    // Simulasi Data Dummy sesuai Class Berita
    $artikels = [
        (object)[
            'judulBerita' => 'Digitalisasi Layanan Publik Mencapai 90% Tahun Ini',
            'isiBerita' => 'Instansi pemerintah terus berkomitmen melakukan transformasi digital untuk mempercepat pelayanan kepada masyarakat luas di seluruh wilayah kabupaten.',
            'tanggalPublikasi' => '12 Mei 2026',
            'statusPublikasi' => 'Published',
            'penulis' => 'Budi Santoso',
            'kategori' => 'Teknologi',
            'gambar' => 'https://images.unsplash.com/photo-1573163281538-50fae418497d?w=800&q=80'
        ],
        (object)[
            'judulBerita' => 'Pemberian Penghargaan Satyalancana Karya Satya',
            'isiBerita' => 'Pimpinan instansi memberikan penghargaan kepada ASN berprestasi yang telah mengabdi lebih dari 20 tahun dengan integritas tinggi.',
            'tanggalPublikasi' => '14 Mei 2026',
            'statusPublikasi' => 'Published',
            'penulis' => 'Rina Pratiwi',
            'kategori' => 'Kepegawaian',
            'gambar' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=800&q=80'
        ],
        (object)[
            'judulBerita' => 'Kunjungan Kerja Meninjau Proyek Infrastruktur Desa',
            'isiBerita' => 'Monitoring dilakukan untuk memastikan pembangunan jalan desa berjalan sesuai SOP dan anggaran yang telah ditetapkan dalam APBD.',
            'tanggalPublikasi' => '15 Mei 2026',
            'statusPublikasi' => 'Published',
            'penulis' => 'Agus Wijaya',
            'kategori' => 'Infrastruktur',
            'gambar' => 'https://images.unsplash.com/photo-1541888941255-081d746efccd?w=800&q=80'
        ]
    ];
@endphp

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
            @foreach ($artikels as $artikel)
                <x-artikel-card :artikel="$artikel" />
            @endforeach
        </div>
    </div>
</x-layout>