<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>

    <link rel = "icon"
          href="public/img/logo.png"
          type = "image/x-icon">

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" type = "text/css"
          href="public/css/films.css">
    <script type="text/javascript" src="public/js/search.js" defer></script>

</head>
<body>
<?php
session_start();
?>
<header>
    <div class ="container_menubar">

        <nav>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="profile_details">Profile</a></li>
                <?php if (isset($_SESSION['user']) || isset($_SESSION['admin'])): ?>
                    <li><a href="/logout" id="logoutButton">Log out</a></li>
                <?php else: ?>
                    <li><a href="/login">Log in</a></li>
                <?php endif; ?>
                <li><a href="#">EN</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section class="films-list">
        <div class="search-container">
            <input type="text" placeholder="Search films..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>

        <h2>Now Showing</h2>
        <ul class="film-items">
            <?php foreach ($films as $film): ?>
            <li class="film-item">
                <a href="film"><img src="public/img/<?= $film->getImage(); ?>" alt="Error"></a>
                <div class="film-info">
                    <h3><?= $film->getFilmName(); ?></h3>
                    <p>Director: <?= $film->getDirector(); ?></p>
                    <p>Cast: <?= $film->getCast(); ?></p>
                </div>
            </li>
            <!-- Add more film items here -->
            <?php endforeach; ?>
        </ul>

    </section>
</main>


<footer class="footer">
    <div class="container-footer">
        <img src = "public/img/logo.png" alt = "logo" class="logo">

        <div class="reservation-panel">
            <form action="#" method="post">
                <div class="select-box">
                    <select name="cinema" required>
                        <option value="" disabled selected>Select Cinema</option>
                        <!--options here -->

                    </select>
                </div>
                <div class="select-box">
                    <select name="movie" required>
                        <option value="" disabled selected>Select Movie</option>
                        <!-- options here -->

                    </select>
                </div>
                <button type="submit" class="btn-reserve">Book</button>
            </form>
        </div>
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Explore our site</h4>
                <ul>
                    <li><a href="#">What's on</a></li>
                    <li><a href="#">Coming soon</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>


<template id="film-template">
    <ul class="film-items">
    <li class="film-item">
        <img src="" alt="Film Image">
        <div class="film-info">
            <h3></h3>
            <p></p> <!-- Director will go here -->
            <p></p> <!-- Cast will go here -->
        </div>
    </li>
    </ul>

</template>
</html>
