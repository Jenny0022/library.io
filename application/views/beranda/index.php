<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Library Homepage" />
    <meta name="author" content="" />
    <title>Library</title>
    <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js"></script>

    <link href="dist/css/styles.css" rel="stylesheet" />
    
    <style>
           /* Styling untuk header */
    .welcome-header {
        position: relative;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden; /* Menghindari overflow video */
    }

    /* Video latar belakang */
    .background-video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        min-width: 100%;
        min-height: 100%;
        z-index: -2; /* Video berada di belakang semua elemen */
    }

    /* Overlay transparan untuk efek gelap */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Transparansi gelap */
        z-index: -1; /* Di atas video tapi di bawah teks */
    }

    /* Animasi teks utama */
    .welcome-text {
        color: white;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        animation: slideIn 1.5s ease-out;
    }

    /* Animasi teks sub */
    .welcome-subtext {
        color: white;
        text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.5);
        animation: fadeIn 2s ease-out 0.5s;
        animation-fill-mode: both; /* Agar tetap terlihat setelah selesai */
    }

    /* Animasi masuk teks utama */
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-30px); /* Mulai dari atas */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Berakhir di posisi normal */
        }
    }

    /* Animasi fade-in teks sub */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

        body {
            background: linear-gradient(120deg, #84fab0, #8fd3f4); /* Awal gradasi */
            background-size: 200% 200%; /* Membuat animasi terlihat dengan lebih mulus */
            animation: gradient-animation 10s ease infinite; /* Animasi dengan transisi */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%; /* Mulai dari kiri */
            }
            50% {
                background-position: 100% 50%; /* Geser ke kanan */
            }
            100% {
                background-position: 0% 50%; /* Kembali ke kiri */
            }
        }

        .animation-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            flex-wrap: wrap; /* Allow wrapping of items */
            padding: 20px; /* Add some padding */
        }

        .glass-background {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
            backdrop-filter: blur(100px); /* Blur effect */
            border-radius: 15px; /* Rounded corners for aesthetic */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
            padding: 40px; /* Padding inside the glass container */
        }

        .book {
            width: 200px; /* Set a consistent width for the book image */
            height: 300px; /* Set a consistent height for the book image */
            margin: 20px; /* Space between books */
            animation: float 3s ease-in-out infinite; /* Animation effect */
            transition: transform 0.3s ease-in-out; /* Smooth transition for scaling */
            object-fit: cover; /* Ensure images cover the entire area without distortion */
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); } /* Move up slightly */
            100% { transform: translateY(0); } /* Move back down */
        }

        .book:hover {
            transform: scale(1.1); /* Scale up on hover for emphasis */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Add shadow for depth */
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="beranda">
                Library
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="beranda"><i class="bi bi-house-door-fill"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="book"><i class="bi bi-book-fill"></i> Books</a></li> 
                    <li class="nav-item"><a class="nav-link" href="about"><i class="bi bi-info-circle-fill"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact"><i class="bi bi-envelope-fill"></i> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login"><i class="bi bi-person-fill"></i> Login admin</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="welcome-header">
    <video class="background-video" autoplay loop muted>
        <source src="https://cdn.pixabay.com/video/2022/08/23/128877-742397548_tiny.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="overlay"></div> <!-- Overlay untuk gelap/transparansi -->
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center">
            <h1 class="display-4 fw-bolder welcome-text">Welcome to Our Library</h1>
            <p class="lead fw-normal welcome-subtext">Explore our collection of books</p>
        </div>
    </div>
</header>

    <!-- Animated Book Section -->
    <section class='py-5'>
        <div class='animation-container'>
            <div class='glass-background'>
                <img src="https://books.google.co.id/books/publisher/content?id=fk_2DwAAQBAJ&hl=id&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U1uyrKGJBNvF6P96Dm1V5QO3qBAdw&w=1280" alt="Book One" class='book'>
                <img src="https://books.google.co.id/books/content?id=GdpNLvS3n88C&hl=id&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U1ztSDZk2mgxmNMYJcaGtxklJzOGA&w=1280" alt="Book Two" class='book'>
                <img src="https://books.google.co.id/books/publisher/content?id=07ABBQAAQBAJ&hl=id&pg=PR1&img=1&zoom=3&bul=1&sig=ACfU3U01qF52eFAZMw_gwzkd7XQqH_65PA&w=1280" alt="Book Three" class='book'>
            <img src="https://books.google.co.id/books/publisher/content?id=tFYTEAAAQBAJ&hl=id&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U1NIV0eX0NYWmbwQ7de0-0BDd9H1w&w=1280" alt="Book Four" class='book'>
            <img src="https://books.google.co.id/books/publisher/content?id=e-ZDDwAAQBAJ&hl=id&pg=PP1&img=1&zoom=3&bul=1&sig=ACfU3U3GzIFrD3AxxQPPSa2T7qPsAzvq4Q&w=1280" alt="Book Five" class='book'>
            </div>
        </div>
    </section>



    <!-- Bootstrap core JS-->
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Background Particle Animation -->
<div id="particles-js"></div>


<!-- Stats Widget -->
<section class="py-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <h2 class="stat-number" data-target="1200">0</h2>
                <p>Books Available</p>
            </div>
            <div class="col-md-4">
                <h2 class="stat-number" data-target="300">0</h2>
                <p>Active Users</p>
            </div>
            <div class="col-md-4">
                <h2 class="stat-number" data-target="50">0</h2>
                <p>Categories</p>
            </div>
        </div>
    </div>
</section>

<section class="happy-graduation-section">
    <div class="container text-center">
        <h2 class="fw-bolder">Celebrate Your Achievements!</h2>
        <p class="lead">Let's celebrate the milestones with a cheerful panda.</p>
        <img src="dist/assets/happy-graduation.png" alt="Happy Graduation Panda" class="img-fluid graduation-image">
    </div>
</section>



<!-- Scrolling Quotes -->
<section class="ticker">
    <marquee scrollamount="15">"Read a book every day!" &nbsp;&nbsp;&nbsp; "Expand your knowledge at our library." &nbsp;&nbsp;&nbsp; "Discover thousands of books."</marquee>
</section>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">&copy; Library 2024</p>
    </div>
</footer>

<!-- JS for Particles and Stats -->
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script>
    // Initialize Particles.js
    particlesJS.load('particles-js', 'https://cdn.jsdelivr.net/npm/particles.js/demo/particles.json');

    // Animated Stats Counter
    const counters = document.querySelectorAll('.stat-number');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 15);
            } else {
                counter.innerText = target;
            }
        };
        updateCount();
    });
</script>

<style>
    /* Particles Background */
    #particles-js {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1;
    }

    /* Stats Section */
    .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
    }

    .ticker {
        background: #f1f1f1;
        padding: 10px 0;
        font-size: 1.2rem;
        color: #333;
        font-weight: bold;
    }

    .happy-graduation-section {
        padding: 40px 0;
        background-color: #f9f9f9;
    }

    .graduation-image {
        max-width: 300px;
        margin: 20px auto;
    }

    .happy-graduation-section h2 {
        color: #2c3e50;
    }

    .happy-graduation-section p {
        color: #7f8c8d;
    }
</style>