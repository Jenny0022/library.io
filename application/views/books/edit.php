<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('dist/assets/favicon.ico'); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container mt-5">
    <h2>Edit Book</h2>

    <form action="<?= base_url('bookadmin/ubah/' . $book['id']); ?>" method="post">
    <div class="mb-3">
        <label for="title" class="form-label">Judul Buku</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= set_value('title', $book['title']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">Penulis</label>
        <input type="text" class="form-control" id="author" name="author" value="<?= set_value('author', $book['author']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="category" name="category" value="<?= set_value('category', $book['category']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" required><?= set_value('description', $book['description']); ?></textarea>
    </div>
    <div class="mb-3">
        <label for="cover_image" class="form-label">Cover Buku</label>
        <input type="text" class="form-control" id="cover_image" name="cover_image" value="<?= set_value('cover_image', $book['cover_image']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="read_link" class="form-label">Link Buku</label>
        <input type="text" class="form-control" id="read_link" name="read_link" value="<?= set_value('read_link', $book['read_link']); ?>" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="available" <?= $book['status'] == 'available' ? 'selected' : ''; ?>>Tersedia</option>
            <option value="unavailable" <?= $book['status'] == 'unavailable' ? 'selected' : ''; ?>>Tidak Tersedia</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
</form>

</div>
</body>
</html>
