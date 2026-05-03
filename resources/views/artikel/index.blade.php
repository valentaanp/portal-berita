<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel</title>
</head>
<body>
    <h1>Daftar Artikel</h1>

    @foreach ($artikel as $item)
        <div>
            <h2>{{ $item->judul }}</h2>
            
            <p>{{ \Illuminate\Support\Str::limit($item->isi, 100) }}</p>
            
            <p>Penulis: {{ $item->penulis }} | Tanggal Publikasi: {{ $item->tanggal_publikasi }}</p>

            <a href="/artikel/{{ $item->id_artikel }}">Baca Selengkapnya</a>
        </div>
        <hr>
    @endforeach
</body>
</html>
