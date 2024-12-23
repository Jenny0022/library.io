<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Library Homepage" />
    <meta name="author" content="" />
    <title>About</title>
    <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="dist/assets/css/styles.css" rel="stylesheet" />
</head>
<body>
    <style>
        /* Animasi dan desain tambahan untuk About Us */
        .about-header {
            background: url('https://english.seoul.go.kr/wp-content/uploads/2022/03/starfield-library-COEX13.jpg') no-repeat center center/cover;
            height: 400px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .about-header h1 {
            color: white;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            animation: fadeInDown 1.5s ease-in-out;
        }
        .about-header p {
            color: white;
            text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1.5s ease-in-out;
        }

        /* Animasi */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .about-section {
            background: linear-gradient(135deg, #f8f9fa, #e8ecef);
            padding: 60px 0;
        }
        .about-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .about-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }
        .about-images {
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .about-images:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="beranda"><i></i> Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" href="beranda"><i class="bi bi-house-door-fill"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="book"><i class="bi bi-book-fill"></i> Books</a></li>
                    <li class="nav-item"><a class="nav-link" href="about"><i class="bi bi-info-circle-fill"></i> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact"><i class="bi bi-envelope-fill"></i> Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login"><i class="bi bi-person-fill"></i> Login admin</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Header -->
    <header class="about-header">
        <div class="text-center">
            <h1>About Us</h1>
            <p>Learn more about our library and its mission.</p>
        </div>
    </header>

    <!-- About Section -->
    <section class="about-section">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mb-5">Who We Are?</h2>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-6 mb-4">
                    <div class="about-card">
                        <h4>Our Mission</h4>
                        <p>Our library provides a wide range of books and fosters a love of reading in the community.</p>
                        <img src="https://www.newtonfalls.org/sites/default/files/migrated/slide11.jpg" alt="Our Mission" class="img-fluid about-images">
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="about-card">
                        <h4>Our History</h4>
                        <p>Founded in 2024, our library has become a hub for knowledge and learning.
                            Celebrate the library!
                        </p>
                        <img src="https://www.koreatravelpost.com/wp-content/uploads/2020/03/Screenshot-2020-03-31-at-12.10.18-PM-1024x684.png" alt="Our History" class="img-fluid about-images">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
        <p class='m-0 text-center text-white'>&copy; Library 2024</p>
        </div>
    </footer>

    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
