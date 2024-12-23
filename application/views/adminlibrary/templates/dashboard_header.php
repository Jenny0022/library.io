<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="dist/assets/favicon.ico" />
    <title>ADMIN LIBRARY</title>

    <!-- Custom fonts and styles -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="<?= base_url('dist/assets/css/style.css') ?>" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #eef2f3;
        }

        .sidebar {
            background: linear-gradient(to bottom, #1d3557, #457b9d);
            width: 250px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            transition: all 0.3s ease;
        }

        .sidebar:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .sidebar .sidebar-brand {
            text-align: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
        }

        .sidebar .sidebar-brand img {
            width: 60px;
            height: 60px;
            margin-bottom: 10px;
        }

        .sidebar .nav-item a {
            color: white;
            font-size: 16px;
            padding: 15px 20px;
            display: block;
            transition: background 0.3s ease;
        }

        .sidebar .nav-item a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        .navbar-nav .nav-link span {
            font-weight: bold;
        }

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class="sidebar-brand">
            <img src="<?='https://cdn.vectorstock.com/i/500p/02/84/open-book-logo-vector-36080284.jpg'?>" alt="">
                LIBRARY
            </div>

            <!-- Nav Items -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="bookadmin">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Books</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Log out</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

    </div>
</body>
</body>

</html>
