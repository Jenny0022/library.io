<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Library Homepage" />
    <meta name="author" content="" />
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="dist/css/styles.css" rel="stylesheet" />
</head>
<style> 

 /* Animasi dan desain tambahan untuk Contact Us */
 .contact-header {
        background: url('https://www.shutterstock.com/image-illustration/contact-us-message-landing-page-260nw-765294985.jpg') no-repeat center center/cover;
        height: 400px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .contact-header h1 {
        color: white;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        animation: fadeInDown 1.5s ease-in-out;
    }
    .contact-header p {
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
    .contact-form button {
        text-align: left;
        display: block; /* Untuk memastikan tombol memiliki elemen blok penuh */
    }
    .contact-section {
    background: linear-gradient(135deg, #e9ecef, #d7c8b5); /* Gradasi krem elegan */
    padding: 50px 0;
    position: relative;
}

.contact-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('https://www.publicdomainpictures.net/pictures/320000/nahled/library-bookshelves.jpg') no-repeat center center fixed;
    background-size: cover; /* Pastikan gambar mencakup seluruh area */
    filter: blur(10px); /* Blur gambar */
    z-index: -1; /* Letakkan di belakang konten */
    opacity: 0.2; /* Transparansi untuk menjaga fokus pada konten */
}
.contact-card {
    background: rgba(255, 255, 255, 0.8); /* Transparansi putih */
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2); /* Shadow lembut */
    backdrop-filter: blur(8px); /* Blur latar belakang */
    border-radius: 15px; /* Sudut membulat */
    border: 1px solid rgba(255, 255, 255, 0.3); /* Border tipis */
    padding: 30px; /* Ruang dalam */
    margin-bottom: 30px; /* Spasi antar-card */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animasi */
}

.contact-card:hover {
    transform: translateY(-10px); /* Naik sedikit saat hover */
    box-shadow: 0 16px 32px 0 rgba(31, 38, 135, 0.4); /* Shadow lebih tajam */
}

.contact-form input,
.contact-form textarea {
    border-radius: 10px;
    border: 1px solid #ccc;
    padding: 15px;
    width: 100%;
    margin-bottom: 15px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #007bff; /* Warna fokus */
    outline: none;
}

.contact-form button {
    background: #007bff; /* Warna utama tombol */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 10px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.3s ease;
}

.contact-form button:hover {
    background:  #339af0; 
    transform: translateY(-3px); /* Tombol naik sedikit */
}
.contact-info-card {
    text-align: center;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contact-info-card:hover {
    transform: translateY(-5px); /* Naik sedikit */
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); /* Shadow lebih tajam */
}

</style>
<body>
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

    <header class="contact-header">
    <div class="text-center">
        <h1>Get in Touch</h1>
        <p>We'd love to hear from you!</p>
    </div>
</header>

    <!-- Main Section -->
    <section class="contact-section">
    <div class="container px-4 px-lg-5">
        

        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6 mb-4">
                <div class="contact-card text-center">
                    <h4 class="mb-4">CONTACT</h4>
                    <form class="contact-form text-start">
                        <input type="text" placeholder="Your Name" required />
                        <input type="email" placeholder="Your Email" required />
                        <textarea placeholder="Your Message" rows="4" required></textarea>
                        <button type="submit" class="text-start">Send</button>

                    </form>

                </div>
            </div>

            <!-- Info Cards -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-12 contact-info-card mb-4">
                        <i class="bi bi-telephone-fill text-primary" style="font-size: 24px;"></i>
                        <p class="mt-3">(+62) 812345678910</p>
                        <p>Call us for more information</p>
                    </div>
                    <div class="col-sm-12 contact-info-card mb-4">
                        <i class="bi bi-envelope-fill text-primary" style="font-size: 24px;"></i>
                        <p class="mt-3">libr@ry.id</p>
                        <p>Drop us an email anytime</p>
                    </div>
                    <div class="col-sm-12 contact-info-card">
                        <i class="bi bi-geo-alt-fill text-primary" style="font-size: 24px;"></i>
                        <p class="mt-3">London Eye, London</p>
                        <p>Visit our main office</p>
                    </div>
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
