<?php
session_start();

if (!isset($_SESSION['is_loggedIn']) || !$_SESSION['is_loggedIn']) {
    header('location: http://localhost/lionheart-web-system/frontend/signin.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/root.css">
    <link rel="stylesheet" href="../styles/index/navbar.css">
    <link rel="stylesheet" href="../styles/dashboard/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/index/signin.css">
</head>

<body>
    <div class="main">
        <!-- Navbar -->
        <div class="nav-container">
            <nav class="container">
                <h2 id="logo">Dummy</h2>
                <ul>
                    <li> <a href="#service_section">Service</a></li>
                    <li> <a href="#about_us_Section">About Us</a></li>
                    <li> <a href="#news_Section">News</a></li>
                    <li> <a href="#contact_section">Contact</a></li>
                    <li>
                        <a class="sign_in_link" href="#">Sign In</a>
                    </li>
                </ul>

                <i id="open_menu" class="fa-solid fa-bars"></i>

            </nav>

            <div id="mobile_navbar" class="mobile_navbar">
                <div class="mobile_header">
                    <h2 id="logo">Dummy</h2>
                    <i id="close_menu" class="fa-solid fa-xmark"></i>
                </div>
                <ul class="mobile_links">
                    <li> <a href="#service_section">Service</a></li>
                    <li> <a href="#about_us_Section">About Us</a></li>
                    <li> <a href="#news_Section">News</a></li>
                    <li> <a href="#contact_section">Contact</a></li>
                    <li>
                        <a class="sign_in_link" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Header -->
        <div class="header">
            <img src="../assets/mypage/header.jpg" alt="header">
            <h1>Sign in</h1>
        </div>

        <!-- Body -->
        <div class="dashboard_Body">
            <div class="login_alert">Login Success</div>
            <button id="signOut" class="signOut">
                Sign out
            </button>
        </div>

        <footer id="footer">
            <div class="container">
                <p>Dummy</p>
                <p>(C) Dummy.</p>
            </div>
        </footer>
    </div>


    <script src="../js/jquery.min.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="../js/dashboard.js"></script>
</body>

</html>