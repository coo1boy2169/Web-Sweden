<?php
require_once '../source/config.php';
require_once SOURCE_ROOT . 'database.php';
$connection = database_connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css">
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="logo">LOGO</div>
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <ul>
            <li><a href="#features">Features</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a href="#" class="CTA">Play now!</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-inner">
            <a href="https://example.com/" class="btn">Play for free!</a>
        </div>
    </section>

    <div class="info">
        <!-- Features Section -->
        <section class="features_container" id="features">
            <h2>Features</h2>
            <ul class="features_list">
                <li class="features_item">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="" class="feature_img">
                    <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                    <h3>Titel</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quibusdam doloribus nam? Eaque consequatur veniam ipsum odit! Itaque, facilis unde!</p>
                </li>
                <li class="features_item">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="">
                    <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                    <h3>Titel</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quibusdam doloribus nam? Eaque consequatur veniam ipsum odit! Itaque, facilis unde!</p>
                </li>
                <li class="features_item">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="">
                    <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                    <h3>Titel</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto quibusdam doloribus nam? Eaque consequatur veniam ipsum odit! Itaque, facilis unde!</p>
                </li>
            </ul>
        </section>

        <!-- FAQ Section -->
        <section class="faq_container" id="faq">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="accordion">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">Question 1</span><span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Question 2</span><span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">Question 3</span><span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-4" aria-expanded="false">
                            <span class="accordion-title">Question 4</span><span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="highscores_container" id="leaderboard">
            <h2>Highscores</h2>
            <div class="leaderboard">
                <div class="player-box">
                    <div class="rank-circle">#1</div>
                    <div class="player-info">
                        <span class="player-name">PLAYER NAME</span>
                        <span class="stat"><img src="./assets/images/diamand.png" alt="Diamonds"> 54</span>
                    </div>
                </div>
                <div class="player-box">
                    <div class="rank-circle">#2</div>
                    <div class="player-info">
                        <span class="player-name">PLAYER NAME</span>
                        <span class="stat"><img src="./assets/images/diamand.png" alt="Diamonds"> 49</span>
                    </div>
                </div>
                <div class="player-box">
                    <div class="rank-circle">#3</div>
                    <div class="player-info">
                        <span class="player-name">PLAYER NAME</span>
                        <span class="stat"><img src="./assets/images/diamand.png" alt="Diamonds"> 45</span>
                    </div>
                </div>
                <div class="player-box">
                    <div class="rank-circle">#4</div>
                    <div class="player-info">
                        <span class="player-name">PLAYER NAME</span>
                        <span class="stat"><img src="./assets/images/diamand.png" alt="Diamonds"> 42</span>
                    </div>
                </div>
                <div class="player-box">
                    <div class="rank-circle">#5</div>
                    <div class="player-info">
                        <span class="player-name">PLAYER NAME</span>
                        <span class="stat"><img src="./assets/images/diamand.png" alt="Diamonds"> 38</span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="footer_under">
            <h2>The Greenline</h2>
            <div>
                <a href=""><i class="ri-instagram-line"></i></a>
                <a href=""><i class="ri-discord-line"></i></a>
                <a href=""><i class="ri-steam-fill"></i></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="./assets/js/app.js"></script>
</body>

</html>
