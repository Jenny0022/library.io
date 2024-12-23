<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ADMIN LIBRARY</title>

    <!-- Custom Fonts and Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fc;
            color: #333;
            overflow-x: hidden;
        }

        /* Sidebar */
        .sidebar {
            background: linear-gradient(to bottom, #1d3557, #457b9d);
            width: 230px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 20px 10px;
            color: #fff;
        }

        .sidebar .sidebar-brand {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .sidebar .nav-link {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .sidebar .nav-link:hover {
            background-color: #1a2b45;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
        }

        /* Content Wrapper */
        #content-wrapper {
            margin-left: 230px;
            min-height: 100vh;
            padding: 20px;
            background-color: #fff;
        }

        /* Navbar */
        .navbar {
            background-color: #f8f9fc;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .navbar .navbar-search {
            display: flex;
            align-items: center;
        }

        .navbar .navbar-search input {
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 20px 0 0 20px;
            outline: none;
        }

        .navbar .navbar-search button {
            background-color: #f4a261;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 0 20px 20px 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .navbar .navbar-search button:hover {
            background-color: #e76f51;
        }

        .navbar .user-info {
            display: flex;
            align-items: center;
        }

        .navbar .user-info img {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Animated Background - Books */
        .animated-background {
            position: relative;
            background-color: #f1f5f8;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .animated-background h1 {
            font-size: 48px;
            font-weight: bold;
            color: #2c3e50;
            z-index: 2;
        }

        .book {
            position: absolute;
            width: 40px;
            height: 50px;
            background-color: #f77f00;
            border-radius: 5px;
            animation: fall 5s linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(-100%);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        /* Random Placement for Books */
        .book:nth-child(odd) {
            background-color: #457b9d;
        }
        .book:nth-child(even) {
            background-color: #e63946;
        }

        .book:nth-child(1) { left: 10%; animation-delay: 0s; }
        .book:nth-child(2) { left: 20%; animation-delay: 1s; }
        .book:nth-child(3) { left: 30%; animation-delay: 2s; }
        .book:nth-child(4) { left: 40%; animation-delay: 1.5s; }
        .book:nth-child(5) { left: 50%; animation-delay: 0.5s; }
        .book:nth-child(6) { left: 60%; animation-delay: 3s; }
        .book:nth-child(7) { left: 70%; animation-delay: 1s; }
        .book:nth-child(8) { left: 80%; animation-delay: 2.5s; }
        .book:nth-child(9) { left: 90%; animation-delay: 1s; }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <img src="https://cdn.vectorstock.com/i/500p/02/84/open-book-logo-vector-36080284.jpg" alt="Logo" style="width: 50px;">
            LIBRARY
        </div>
        <a class="nav-link" href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a class="nav-link" href="bookadmin"><i class="fas fa-book"></i> Books</a>
        <a class="nav-link" href="logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
    </div>

    <!-- Content Wrapper -->
    <div id="content-wrapper">
        <!-- Navbar -->
        <div class="navbar">
            <form class="navbar-search">
                <input type="text" placeholder="Search for Books...">
                <button type="button"><i class="fas fa-search"></i></button>
            </form>
            <div class="user-info">
                <!-- Profile link here -->
                <a href="profile">
                    <img src="dist/assets/img4.jpeg" alt="Profile Picture">
                    <a>Jenny</a>
                </a>
            </div>
        </div>

        <!-- Animated Background -->
        <div class="animated-background">
            <h1>Welcome to the Library Admin</h1>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>
            <div class="book"></div>
        </div>
    </div>
</body>
</html>
