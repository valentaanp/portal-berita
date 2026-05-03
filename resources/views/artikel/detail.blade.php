<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
</head>
<body>
    <h1>{{ $artikel->judul }}</h1>

    <p>Penulis: {{ $artikel->penulis }} | Tanggal Publikasi: {{ $artikel->tanggal_publikasi }}</p>
    
    <hr>

    <div>
        {{ $artikel->isi }}
    </div>

    <br><br>

    <a href="/artikel">Kembali ke Daftar Artikel</a>
</body>
</html>
