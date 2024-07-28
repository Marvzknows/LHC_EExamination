<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../frontend/styles/root.css">
    <link rel="stylesheet" href="../frontend/styles/index/navbar.css">
    <link rel="stylesheet" href="../frontend/styles/index/carousel.css">
    <link rel="stylesheet" href="../frontend/styles/index/service.css">
    <link rel="stylesheet" href="../frontend/styles/index/aboutUs.css">
    <link rel="stylesheet" href="../frontend/styles/index/news.css">
    <link rel="stylesheet" href="../frontend/styles/index/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <button> Sign In </button>
                    </li>
                </ul>

                <!-- Mobile Nav -->
                <i id="close_menu" class="fa-solid fa-bars"></i>
            </nav>
        </div>

        <!-- Carousel -->
        <div class="carousel">
            <div class="carousel-inner">
                <img class="carousel-item active" src="../frontend/assets/visual/slide01.jpg">
                <img class="carousel-item" src="../frontend/assets/visual/slide02.jpg">
                <img class="carousel-item" src="../frontend/assets/visual/slide03.jpg">
            </div>
            <button class="prev">&lt;</button>
            <button class="next">&gt;</button>
        </div>

        <!-- Service -->
        <div id="service_section" class="container service">
            <h2 class="logo">Service</h2>

            <div class="cards_container">
                <div class="card">
                    <img src="../frontend/assets/service/service-desc01.jpg" alt="card1">
                    <div class="card_content">
                        <h4>Service Title</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../frontend/assets/service/service-desc02.jpg" alt="card1">
                    <div class="card_content">
                        <h4>Service Title</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../frontend/assets/service/service-desc03.jpg" alt="card3">
                    <div class="card_content">
                        <h4>Service Title</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../frontend/assets/service/service-desc04.jpg" alt="card4">
                    <div class="card_content">
                        <h4>Service Title</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us -->
        <div id="about_us_Section" class="about_us">
            <img src="../frontend/assets/aboutus/background.jpg">
            <div class="about_us_content">
                <h2>About Us</h2>
                <p class="about_us_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. .Etiam dui sem, fermentum vitae, sagittis id, malesuada in, quam. Nulla non lectus sed nisl molestie malesuada. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Integer tempor. Praesent vitae arcu tempor neque lacinia pretium. Fusce consectetuer risus a nunc. Aliquam ornare wisi eu metus. In sem justo, commodo ut, suscipit at, pharetra vitae, orci. Duis risus. Praesent id justo in neque elementum ultrices. Nullam sit amet magna in magna gravida vehicula. Etiam dictum tincidunt diam.</p>
            </div>
        </div>

        <!-- News Section -->
        <div id="news_Section" class="news">
            <h1>News</h1>
            <div class="container news_container">
                <div class="news_content">
                    <div class="news_row">
                        <div class="news_badge_red">Information</div>
                        <div class="news_date">2018.04.18</div>
                        <div class="news_text">Something news title is here, this is dummy text. Something news title is here, this is dummy text.</div>
                    </div>
                    <div class="news_row">
                        <div class="news_badge_blue">Recruit</div>
                        <div class="news_date">2018.04.18</div>
                        <div class="news_text">Something news title is here, this is dummy text. Something news title is here, this is dummy text.</div>
                    </div>
                    <div class="news_row">
                        <div class="news_badge_red">Information</div>
                        <div class="news_date">2018.04.18</div>
                        <div class="news_text">Something news title is here, this is dummy text. Something news title is here, this is dummy text.</div>
                    </div>
                    <div class="news_row">
                        <div class="news_badge_blue">Recruit</div>
                        <div class="news_date">2018.04.18</div>
                        <div class="news_text">Something news title is here, this is dummy text. Something news title is here, this is dummy text.</div>
                    </div>
                    <div class="news_row">
                        <div class="news_badge_red">Information</div>
                        <div class="news_date">2018.04.18</div>
                        <div class="news_text">Something news title is here, this is dummy text. Something news title is here, this is dummy text.</div>
                    </div>
                </div>
            </div>

            <div class="showlist_outer">
                <div class="showlist_inner">
                    Show News List
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div id="contact_section" class="contact">
            <img src="../frontend/assets/contact/background.jpg" alt="contactBg">

            <div class="content">
                <h2>Contact</h2>
                <div class="google_map">
                    GoogleMap
                </div>
            </div>
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
    <script src="../frontend/js/index.js"></script>
</body>

</html>