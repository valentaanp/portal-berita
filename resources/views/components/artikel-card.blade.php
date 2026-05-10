@props(['artikel'])

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
    {{-- Gambar: Jika belum ada kolom gambar di database, bisa gunakan placeholder atau tambahkan field gambar --}}
    <img src="{{ $artikel->gambar ?? 'https://via.placeholder.com/800x450' }}" class="h-48 w-full object-cover" alt="{{ $artikel->judul }}">
    
    <div class="p-6 flex-grow">
        <div class="flex items-center mb-3">
            {{-- Mengambil nama_kategori dari relasi kategori() --}}
            <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2.5 py-1 rounded uppercase">
                {{ $artikel->kategori->nama_kategori ?? 'Umum' }}
            </span>
            <span class="ml-3 text-slate-400 text-xs">
                {{ \Carbon\Carbon::parse($artikel->tanggal_publikasi)->format('d M Y') }}
            </span>
        </div>
        
        <h3 class="text-xl font-bold text-slate-800 mb-3 leading-snug">
            {{-- Menggunakan $artikel->judul sesuai kolom database --}}
            <a href="#" class="hover:text-blue-700">{{ $artikel->judul }}</a>
        </h3>
        
        <p class="text-slate-600 text-sm line-clamp-3">
            {{-- Menggunakan $artikel->isi sesuai kolom database --}}
            {{ $artikel->isi }}
        </p>
    </div>
    
    <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
        <div class="flex flex-col">
            <span class="text-xs text-slate-500 font-medium italic">Oleh: {{ $artikel->penulis }}</span>
            <span class="text-[10px] text-slate-400 uppercase tracking-tighter">Akses: {{ $artikel->level_artikel }}</span>
        </div>
        <button class="text-blue-600 font-bold text-xs uppercase tracking-wider hover:text-blue-800">Baca Selengkapnya</button>
    </div>
</div>