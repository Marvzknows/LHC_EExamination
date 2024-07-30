<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../frontend/styles/root.css">
    <link rel="stylesheet" href="../frontend/styles/index/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../frontend/styles/index/signin.css">
</head>

<body>
    <div class="main">
        <!-- Navbar -->
        <div class="nav-container">
            <nav class="container">
                <h2>Dummy</h2>
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
                    <h2>Dummy</h2>
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
            <img src="../frontend/assets/mypage/header.jpg" alt="header">
            <h1>Sign in</h1>
        </div>

        <!-- Form -->
        <form id="signUpForm">
            <div class="form_row">
                <label for="username">USERNAME</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form_row">
                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password">
            </div>

            <div class="signup_btns">
                <button id="signInBtn" class="signInBtn" type="submit">
                    Sign In
                </button>
                <a href="#">Forgot Password?</a>
            </div>
        </form>
        <div class="sub_links">
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="container">
                <p>Dummy</p>
                <p>(C) Dummy.</p>
            </div>
        </footer>

    </div>


    <script src="../frontend/js/jquery.min.js"></script>
    <script src="../frontend/js/navbar.js"></script>
</body>

</html>