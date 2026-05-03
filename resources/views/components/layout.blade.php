<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portal Berita Instansi' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 font-sans">
    <!-- Navbar Component -->
    <nav class="bg-blue-900 text-white shadow-lg">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img src="https://images.unsplash.com/photo-1557683316-973673baf926?w=50&h=50&fit=crop" class="rounded-full" alt="Logo">
                <span class="font-bold text-xl tracking-tight">Dinas Komunikasi & Informatika</span>
            </div>
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="#" class="hover:text-blue-200 transition">Beranda</a>
                <a href="#" class="hover:text-blue-200 transition">Profil</a>
                <a href="#" class="text-blue-300 transition">Berita</a>
                <a href="#" class="hover:text-blue-200 transition">Layanan</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-10 px-6 min-h-screen">
        {{ $slot }}
    </main>

    <footer class="bg-slate-800 text-slate-300 mt-20 py-10 border-t-4 border-yellow-500">
        <div class="container mx-auto px-6 text-center">
            <p class="font-semibold text-white">© 2026 Pemerintah Kabupaten Sejahtera</p>
            <p class="text-sm mt-2">Jl. Protokol No. 123, Pusat Pemerintahan</p>
        </div>
    </footer>
</body>
</html>