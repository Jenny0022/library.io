<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets/css/button.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/tambah.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />

    <style>
        body {
            background: linear-gradient(to right,rgb(104, 148, 230),rgb(255, 255, 255));
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .animated-books {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: -1;
        }

        .book {
            position: absolute;
            width: 50px;
            height: 70px;
            background: #fff;
            border-radius: 5px;
            animation: floatBook 8s infinite ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @keyframes floatBook {
            0% {
                transform: translateY(100vh) rotate(0deg);
            }
            100% {
                transform: translateY(-200px) rotate(360deg);
            }
        }

        .btn-primary, .btn-success, .btn-warning, .btn-danger {
            border-radius: 20px;
        }

        .modal-content {
            border-radius: 15px;
        }

        .table {
            background: white;
            border-radius: 10px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="animated-books" id="bookContainer"></div>

    <script>
        function createBooks() {
            const container = document.getElementById("bookContainer");
            for (let i = 0; i < 20; i++) {
                const book = document.createElement("div");
                book.classList.add("book");
                book.style.left = Math.random() * 100 + "vw";
                book.style.animationDuration = Math.random() * 4 + 6 + "s";
                book.style.background = `hsl(${Math.random() * 360}, 70%, 80%)`;
                container.appendChild(book);
            }
        }

        window.onload = createBooks;
    </script>
</body>

<div class="container mt-5" style="margin-left: 250px;">
    <div class="row mb-4">
        <div class="col-md-8">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data buku..." name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mb-4">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahBukuModal">Tambah Data Buku</button>
    </div>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Buku <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

<div class="table-responsive" style="max-height: 550px; overflow-y: auto;">
    <table class="table">
        <thead class="table-light">
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Baris data buku -->
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= htmlspecialchars($book['id']); ?></td>
                    <td><?= htmlspecialchars($book['title']); ?></td>
                    <td><?= htmlspecialchars($book['category']); ?></td>
                    <td><?= htmlspecialchars($book['author']); ?></td>
                    <td><?= htmlspecialchars($book['description']); ?></td>
                    <td><?= htmlspecialchars($book['status']); ?></td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editBukuModal<?= $book['id']; ?>">Ubah</button>
                        <a href="<?= base_url('bookadmin/hapus/' . $book['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php foreach ($books as $book): ?>
<div class="modal fade" id="editBukuModal<?= $book['id']; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('bookadmin/edit/' . $book['id']); ?>" method="POST">
                    <?php foreach (['title' => 'Judul Buku', 'author' => 'Penulis', 'category' => 'Kategori', 'description' => 'Deskripsi', 'cover_image' => 'Cover Image URL', 'read_link' => 'Link Buku'] as $name => $label): ?>
                        <div class="mb-3">
                            <label for="<?= $name; ?>" class="form-label"><?= $label; ?></label>
                            <input type="text" class="form-control" name="<?= $name; ?>" value="<?= htmlspecialchars($book[$name]); ?>" required>
                        </div>
                    <?php endforeach; ?>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="available" <?= $book['status'] == 'available' ? 'selected' : ''; ?>>Available</option>
                            <option value="unavailable" <?= $book['status'] == 'unavailable' ? 'selected' : ''; ?>>Unavailable</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Buku</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<div class="modal fade" id="tambahBukuModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Buku Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('bookadmin/add'); ?>" method="POST">
                    <?php foreach (['title' => 'Judul Buku', 'author' => 'Penulis', 'category' => 'Kategori', 'description' => 'Deskripsi', 'cover_image' => 'Cover Image URL', 'read_link' => 'Link Buku'] as $name => $label): ?>
                        <div class="mb-3">
                            <label for="<?= $name; ?>" class="form-label"><?= $label; ?></label>
                            <input type="text" class="form-control" name="<?= $name; ?>" required>
                        </div>
                    <?php endforeach; ?>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Buku</button>
                </form>
            </div>
        </div>
    </div>
</div> 