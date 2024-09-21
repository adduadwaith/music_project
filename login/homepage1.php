<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sangita - Music Website</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">SANGITA</div>
            <nav class="main-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Artist</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Premium</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li> <a href="logout.php">logout</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <a href="index.php" class="login">Log in</a>
                <a href="index.php" class="signup">Sign up</a>
            </div>
            <div class="hamburger-menu" onclick="openNav()">
                &#9776;
            </div>
        </div>
    </header>

    <!-- Sidebar for mobile view (now from right to left) -->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">Home</a>
        <a href="#">Artist</a>
        <a href="#">Music</a>
        <a href="#">Premium</a>
        <a href="#">Help</a>
        <a href="#">Download</a>
        <a href="#">Privacy</a>
        <a href="#">Terms</a>
        <a href="../login/index.php" class="login">Log in</a>
        <a href="../login/index.php" class="signup">Sign up</a>
    </div>
    <section class="popular-artists">
    <h2>Popular Artists</h2>
    <div class="artist-scroll">
        <div class="artist">
            <img src="../homepage1/krithy.jpg" alt="Artist 1">
            <p>Krithi Shetty</p>
        </div>
        <div class="artist">
            <img src="../homepage1/arjit_singh.jpeg" alt="Artist 2">
            <p>Arjit Singh</p>
        </div>
        <div class="artist">
            <img src="../homepage1/jasleen.jpg" alt="Artist 3">
            <p>Jasleen Royal </p>
        </div>
        <div class="artist">
            <img src="../homepage1/ar_rahmanjpeg.jpeg" alt="Artist 3">
            <p>A.R.Rahman</p>
        </div>
        <div class="artist">
            <img src="../homepage1/krithi-shetty-2.avif" alt="Artist 3">
            <p>Krithy Shetty</p>
        </div>
        <div class="artist">
            <img src="../homepage1/shreya.jpeg" alt="Artist 3">
            <p>Shreya Ghoshal</p>
        </div>
        <!-- Add more artists as needed -->
    </div>
</section>

<section class="track-section">
    <h2>Tracks</h2>
    <div class="tracks">
        <div class="track" onclick="location.href='#melody'">Melody</div>
        <div class="track" onclick="location.href='#rays'">Rays</div>
        <div class="track" onclick="location.href='#hh'">HH</div>
        <div class="track" onclick="location.href='#classic'">Classic</div>
    </div>
</section>



    <script src="script1.js"></script>
</body>
</html>
