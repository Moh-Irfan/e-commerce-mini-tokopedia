<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nama Produk:</label>
        <input type="text" name="name" required>
        <label>Harga:</label>
        <input type="number" name="price" required>
        <label>Deskripsi:</label>
        <textarea name="description"></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
