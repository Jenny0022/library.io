<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Library Homepage" />
    <meta name="author" content="" />
    <title>Books</title>
    <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="dist/assets/css/styles.css" rel="stylesheet" />
</head>
<body>
    <style>
/* Video Background */
.background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}

/* Overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3); /* Kurangi transparansi overlay untuk meningkatkan kontras */
    z-index: 0;
}

/* Header Styles */
.book-header {
    position: relative;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff; /* Teks putih */
    overflow: hidden;
}

.book-text {
    font-weight: bold;
    font-size: 3rem;
    color: #ffffff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Bayangan teks lebih halus untuk kontras yang lebih baik */
    z-index: 1;
}

.book-subtext {
    font-size: 1.5rem;
    color: #ffffff;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Bayangan teks lebih halus */
    z-index: 1;
}

/* Tambahkan efek animasi untuk teks */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.book-text, .book-subtext {
    animation: fadeIn 1.5s ease-in-out;
    animation-fill-mode: forwards; 
}



    </style>

     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?= base_url('beranda') ?>"><i></i> Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('beranda') ?>"><i class="bi bi-house-door-fill"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('book') ?>"><i class="bi bi-book-fill"></i> Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>"><i class="bi bi-info-circle-fill"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>"><i class="bi bi-envelope-fill"></i> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('login') ?>"><i class="bi bi-person-fill"></i> Login admin</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
<header class="book-header">
    <!-- Video Background -->
    <video class="background-video" autoplay loop muted>
        <source src="https://cdn.pixabay.com/video/2022/04/25/115021-703067702_large.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div> <!-- Overlay -->
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center">
            <h1 class="display-4 fw-bolder book-text">Our Books</h1>
            <p class="lead fw-normal book-subtext">Explore our collection of books</p>
        </div>
    </div>
</header>

<!-- Books Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row">
            <?php foreach ($books as $book): ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-lg overflow-hidden book-card">
                        <!-- Book Image -->
                        <img class="card-img-top" src="<?= htmlspecialchars($book['cover_image']) ?>" 
                             alt="<?= htmlspecialchars($book['title']) ?>" 
                             style="height: 250px; object-fit: contain;">
                        <div class="card-body">
                            <!-- Book Title -->
                            <h5 class="card-title" style="font-size: 1.1rem; font-weight: bold; color: #333; white-space: normal; word-wrap: break-word;">
                                <?= htmlspecialchars($book['title']) ?>
                            </h5>
                            <!-- Author Name -->
                            <p class="card-text text-muted" style="font-size: 0.85rem; color: #666;">
                                by <?= htmlspecialchars($book['author']) ?>
                            </p>
                            <!-- Description -->
                            <p class="card-text" style="font-size: 0.75rem; color: #555;">
                                <?= htmlspecialchars(substr($book['description'], 0, 800)) ?>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <!-- Read button -->
                            <a href="<?= htmlspecialchars($book['read_link']) ?>" class="btn btn-info btn-sm" target="_blank">
                                <i class="bi bi-book-fill"></i> Read
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if (empty($books)): ?>
                <div class="text-center mt-5">
                    <img src="https://via.placeholder.com/300x200?text=No+Books+Available" alt="No Books" class="img-fluid mb-4">
                    <p class="text-muted">No books available. Start adding your collection!</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
        <p class='m-0 text-center text-white'>&copy; Library 2024</p>
        </div>
    </footer>

    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- CSS for animation and card style -->
<style>
    .book-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .book-card:hover {
        transform: scale(1.05); /* Zoom in on hover */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
    }

    .book-card .card-body {
        transition: transform 0.3s ease;
    }

    .book-card:hover .card-body {
        transform: translateY(-10px); /* Slight lift on hover */
    }

    /* Improved card design */
    .book-card img {
        border-radius: 0.5rem;
    }

    .card-title {
        font-family: 'Arial', sans-serif;
        color: #333;
    }

    .card-footer {
        background-color: #f8f9fa;
        border-top: 1px solid #ddd;
    }

    /* Hover effect for the read button */
    .card-footer .btn-info:hover {
        background-color: #007bff;
        color: white;
    }
</style>