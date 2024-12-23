<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PROFILE</title>
    <link href="dist/assets/css/styles.css" rel="stylesheet" />
    
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <img src="dist/assets/img4.jpeg" alt="Profile Picture">
            <h1><?= $user; ?></h1>
            <p>"Administrator of MyWeb Library"</p>
        </div>
        <div class="profile-content">
            <h2>About Me :</h2>
            <p>I am responsible for managing the MyWeb Library system, ensuring a seamless reading experience for all users. I oversee book collections, user management, and platform development to make reading accessible and enjoyable.</p>
        </div>
        <div class="profile-footer">
    <p>Connect with us on</p>
    <div class="social-links">
        <a href="https://www.instagram.com/libraryhub" target="_blank" title="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.pinterest.com/libraryhub" target="_blank" title="Pinterest">
            <i class="fab fa-pinterest"></i>
        </a>
    </div>
</div>

    </div>
</body>
</html>


<style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #eef2f3; /* Light blue-gray */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Profile Container */
        .profile-container {
            background: #ffffff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            border-radius: 20px;
            overflow: hidden;
            max-width: 350px;
            margin: 20px;
            text-align: center;
            border: 3px solid #4a6fa5; /* Deep blue */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .profile-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
        }

        /* Header */
        .profile-header {
            background: linear-gradient(to bottom, #2b4f7b, #4a6fa5); /* Blue gradient */
            padding: 40px;
            color: white;
            position: relative;
        }

        .profile-header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid #fff;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, -50%);
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .profile-container:hover .profile-header img {
            transform: translate(-50%, -50%) scale(1.05);
        }

        .profile-header h1 {
            font-size: 24px;
            margin-top: 70px;
        }

        .profile-header p {
            font-size: 14px;
            font-style: italic;
            opacity: 0.9;
        }

        /* Content */
        .profile-content {
            padding: 25px;
            color: #555;
            margin-top: 60px;
        }

        .profile-content h2 {
            font-size: 20px;
            color: #2b4f7b; /* Dark blue */
            margin-bottom: 10px;
        }

        .profile-content p {
            font-size: 14px;
            line-height: 1.6;
        }

        /* Footer */
        .profile-footer {
            padding: 15px 0;
            background: #f3f0ee; /* Light cream */
            border-top: 2px solid #4a6fa5;
        }

        .profile-footer a {
            text-decoration: none;
            color: #4a6fa5;
            font-weight: bold;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .profile-footer a:hover {
            color: #2b4f7b;
        }

.social-links {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-links a {
    text-decoration: none;
    font-size: 24px;
    color: #4a6fa5;
    transition: color 0.3s ease, transform 0.3s ease;
}

.social-links a:hover {
    color: #2b4f7b;
    transform: scale(1.2);
}

    </style>
