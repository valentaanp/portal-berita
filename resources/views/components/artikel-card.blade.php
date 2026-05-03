@props(['artikel'])

<div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-xl transition-all duration-300 flex flex-col">
    <img src="{{ $artikel->gambar }}" class="h-48 w-full object-cover" alt="{{ $artikel->judulBerita }}">
    
    <div class="p-6 flex-grow">
        <div class="flex items-center mb-3">
            <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2.5 py-1 rounded uppercase">
                {{ $artikel->kategori }}
            </span>
            <span class="ml-3 text-slate-400 text-xs">{{ $artikel->tanggalPublikasi }}</span>
        </div>
        
        <h3 class="text-xl font-bold text-slate-800 mb-3 leading-snug">
            <a href="#" class="hover:text-blue-700">{{ $artikel->judulBerita }}</a>
        </h3>
        
        <p class="text-slate-600 text-sm line-clamp-3">
            {{ $artikel->isiBerita }}
        </p>
    </div>
    
    <div class="px-6 py-4 bg-slate-50 border-t border-slate-100 flex items-center justify-between">
        <span class="text-xs text-slate-500 font-medium italic">Oleh: {{ $artikel->penulis }}</span>
        <button class="text-blue-600 font-bold text-xs uppercase tracking-wider hover:text-blue-800">Baca Selengkapnya</button>
    </div>
</div>