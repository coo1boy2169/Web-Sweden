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
    <header>
        <a href="index.php" class="logo"><img src="./assets/images/logo_V1.png" class="logo_img" alt=""></a>
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </label>
        <ul>
            <li><a href="team.php">Team</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a href="#" class="CTA">Play now!</a></li>
        </ul>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-inner">
    <button id="downloadButton" class="btn">Download game</button>
 
    <script>
        // JavaScript to trigger download
        document.getElementById('downloadButton').addEventListener('click', () => {
            const fileName = 'example.txt'; // Change the file name as needed
            const content = 'Hello, this is the file content!'; // Replace with your file content
 
            // Create a blob object
            const blob = new Blob([content], { type: 'text/plain' });
 
            // Create an anchor element and simulate a click
            const a = document.createElement('a');
            a.href = URL.createObjectURL(blob);
            a.download = fileName;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        });
    </script>        
    </div>
    </section>

    <div class="info">
        <!-- Features Section -->
        <section class="features_container" id="features">
            <h2>Features</h2>
            <ul class="features_list">

                <div class="card">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="Image 1">
                    <div class="card-content">
                    <div class="card-features">
                            <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                        </div>                        <div class="card-title">Title 1</div>
                        <div class="card-description">Description for the first item goes here.</div>
                    </div>
                </div>
                <div class="card">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="Image 2">
                    <div class="card-content">
                    <div class="card-features">
                            <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                        </div>                        <div class="card-title">Title 1</div>
                        <div class="card-description">Description for the first item goes here.</div>
                    </div>
                </div>
                <div class="card">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="Image 3">
                    <div class="card-content">
                        <div class="card-features">
                            <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                        </div>
                        <div class="card-title">Title 1</div>
                        <div class="card-description">Description for the first item goes here.</div>
                    </div>
                </div>
            </ul>
            <!-- <ul class="features_list">
                <li class="features_item">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="" class="feature_img">
                    <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                    <h3>LAN</h3>
                    <p>You want to play together with your friend you can!!! Our game has LAN connection so if u want to play this game with a friend you can do that if you are on the same internet connection</p>
                </li>
                <li class="features_item">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="" class="feature_img">
                    <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                    <h3>Team work</h3>
                    <p>You and your friend need to gather materials to help each other grow your train station you play against other people so be the fastest and compare your times with others</p>
                </li>
                <li class="features_item">
                    <img src="https://i0.wp.com/www.bishoprook.com/wp-content/uploads/2021/05/placeholder-image-gray-16x9-1.png?ssl=1" alt="" class="feature_img">
                    <span class="feature_span_1">GAME FEATURE </span><span class="feature_span_2">| 09/01/2025</span>
                    <h3>Trains</h3>
                    <p>Create, Upgrade and explore the transportation of sweden and netherlands to keep your city eco friendly!</p>
                </li>
            </ul> -->
        </section>

        <!-- FAQ Section -->
        <section class="faq_container" id="faq">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="accordion">
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">Who made the game?</span><span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>A small group of students from the Netherlands (Mediacollege Amsterdam) and From Sweden (LBS), its made with game artists & game developers.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-2" aria-expanded="false">
                            <span class="accordion-title">Whats the aim of the game?</span><span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p>The aim of the game is to create an eco-friendly train system to collect and transport resources.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button id="accordion-button-3" aria-expanded="false">
                            <span class="accordion-title">Whats the relation betweet the two country's?</span><span class="icon" aria-hidden="true"></span>
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
       
        <section class="highscores_container" >
            <h2>Highscores</h2>
            <div class="leaderboard" id="leaderboard">
                <script>
                    
                    async function loadLeaderboard() {
                        try {
                            const response = await fetch('https://37277.hosts2.ma-cloud.nl/sweden/send_to_database.php'); // Update to your actual endpoint
                            const data = await response.json();
            
                            // Sort and limit to top 5
                            const topTeams = data.slice(0, 5);
            
                            const leaderboard = document.getElementById('leaderboard');
                            leaderboard.innerHTML = ''; // Clear the leaderboard
            
                            topTeams.forEach((team, index) => {
                                const rankClass = index === 0 ? 'rank-1' : index === 1 ? 'rank-2' : index === 2 ? 'rank-3' : '';
                                const listItem = `
                                <div class="player-box">
                                    <div class="rank-circle">#${team.rank}</div>
                                    <div class="player-info">
                                        <span class="player-name">${team.username}</span>
                                        <span class="stat"><img src="./assets/images/diamand.png" alt="Diamonds">${team.score}</span>
                                    </div>
                                </div>
                                `;
                                leaderboard.innerHTML += listItem;
                            });
                        } catch (error) {
                            console.error('Error loading leaderboard:', error);
                        }
                    }
            
                    // Load leaderboard when the page loads
                    loadLeaderboard();
                </script>

                <!-- <div class="player-box">
                    <div class="rank-circle">#1</div>
                    <div class="player-info">
                        <span class="player-name">PLAYER NAME</span>
                        <span class="stat"><img src="./assets/images/diamand.png" alt="Diamonds">3</span>
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
                </div> -->

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
