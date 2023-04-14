<?php
session_start();

$query = "SELECT * FROM movie ";
//$search_result = filterTable($query);

    $connect = mysqli_connect("localhost", "root", "", "moviex");

$res = $connect->query($query);

$connect->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="logo.png" type="image/png">
    <title>MovieX</title>
    <link rel="stylesheet" href="cardd.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="films.css">
    <link rel="stylesheet" href="media_query.css">
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<div class="container">

    <header class="">
        <div class="navbar">

            <button class="navbar-menu-btn">
                <span class="one"></span>
                <span class="two"></span>
                <span class="three"></span>
            </button>


            <a href="#" class="navbar-brand">
            </a>

            <nav class="">
                <ul class="navbar-nav">

                    <li> <a href="#" class="navbar-link">Movies page</a> </li>
                    <li> <a href="#category" class="navbar-link">Category</a> </li>
                    <li> <a href="#live" class="navbar-link  indicator">LIVE</a> </li>

                </ul>
            </nav>

            <div class="navbar-actions">

                <form action="#" class="navbar-form">
                    <input type="text" name="search" placeholder="I'm looking for..." class="navbar-form-search">

                    <button class="navbar-form-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                    <button class="navbar-form-close">
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </button>
                </form>
                <button class="navbar-search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <a href="personu.php" class="navbar-signin">
                    <span>Back</span>
                    <ion-icon name="log-in-outline"></ion-icon>
                </a>


            </div>

        </div>
    </header>

    <form>

        <section class="banner">
            <div class="banner-card">


                <img src="John-Wick-3.jpg" class="banner-img" alt="">

                <div class="card-content">
                    <div class="card-info">

                        <div class="genre">
                            <ion-icon name="film"></ion-icon>
                            <span>Action/Thriller</span>
                        </div>

                        <div class="year">
                            <ion-icon name="calendar"></ion-icon>
                            <span>2019</span>
                        </div>

                        <div class="duration">
                            <ion-icon name="time"></ion-icon>
                            <span>2h 11m</span>
                        </div>

                        <div class="quality">4K</div>

                    </div>

                    <h2 class="card-title">John Wick: Chapter 3 - Parabellum</h2>
                </div>

            </div>
        </section>

        <section class="movies">

            <div class="filter-bar">

                <div class="filter-dropdowns">

                    <select name="genre" class="genre">
                        <option value="all genres">All genres</option>
                        <option value="action">Action</option>
                        <option value="adventure">Adventure</option>
                        <option value="animal">Animal</option>
                        <option value="animation">Animation</option>
                        <option value="biography">Biography</option>
                    </select>

                    <select name="year" class="year">
                        <option value="all years">All the years</option>
                        <option value="2022">2022</option>
                        <option value="2020-2021">2020-2021</option>
                        <option value="2010-2019">2010-2019</option>
                        <option value="2000-2009">2000-2009</option>
                        <option value="1980-1999">1980-1999</option>
                    </select>

                </div>

                <div class="filter-radios">

                    <input type="radio" name="grade" id="featured" checked>
                    <label for="featured">Featured</label>

                    <input type="radio" name="grade" id="popular">
                    <label for="popular">Popular</label>

                    <input type="radio" name="grade" id="newest">
                    <label for="newest">Newest</label>

                    <div class="checked-radio-bg"></div>

                </div>

            </div>
            <form action="index.php" method="post" name="myform">
            <div class="mov-container">
                <?php
                while($row = mysqli_fetch_array( $res)):?>
                <div class="mov">
                    <div class="side left"></div>
                    <div class="side botin">
                        <?php

                        $video=$row['video'];

                        echo'<a href="'.$video.'"download="file name "<i class="fa fa-download"></i></a>' ;

                        ?>

                        <?php

                        $id=$row['Id'];

                        echo'<a href="fsh.php?cartid='.$id.'"<i class="fa fa-film" style="margin-left: 5px "> </i></a>' ;

                        ?>
                        <?php
                        $id=$row['Id'];
                        $im=$row['Photo'];
                        $iduser = $_SESSION['e'];
                        echo'<a href="fav1.php?cartid1=' . $id . '& userid=' . $iduser . '& im=' . $im . '"<i class="fa fa-star" ></i></a>' ;


                        ?>

                    </div>
                    <div class="side main">
                        <?php
                        $img=$row['Photo'];
                        echo'<div>
             <img style="height: 240px" id="t" src="'.$img.'" >  </div>' ;
                        ?>
                    </div>
                </div>

                <?php

                endwhile; ?>

        </section>
        <button class="load-more">LOAD MORE</button>

    </form>

        <section class="category" id="category">

            <h2 class="section-heading">Category</h2>

            <div class="category-grid">

                <div class="card rgb">
                    <form method="post" action="index.php"></form>
                    <div class="card-image">

                        <a href="horror_films.php"><img style="height: 250px; width: 227px;" src="horror.jpg"></a>
                    </div>
                    <div class="card-text">
                        <h2>Horror</h2>
                    </div>
                </div>
                <div class="card rgb">
                    <div class="card-image">
                        <a href="Actin_films.php"><img style="height: 250px; width: 227px;" src="action.jpg"></a>
                    </div>
                    <div class="card-text">
                        <h2>Action</h2>
                    </div>
                </div>
                <div class="card rgb">
                    <div class="card-image">
                        <a href="class.php"><img style="height: 250px; width: 227px;"  src="comedy.jpg"></a>
                    </div>
                    <div class="card-text">
                        <h2>Comedy</h2>
                    </div>
                </div>
                <div class="card rgb" >
                    <div class="card-image">
                        <a href="Animation_films.php"><img style="height: 250px; width: 227px;" src="animated.jpg"></a>
                    </div>
                    <div class="card-text">
                        <h2>Animation</h2>
                    </div>
                </div>

        </div>
        </section>

        <section class="live" id="live">

            <h2 class="section-heading">Live Tv Shows</h2>

            <div class="live-grid">



                <div class="live-card">

                    <div class="card-head">
                        <img src="got.jpg" alt="" class="card-img">
                        <div class="live-badge">LIVE</div>
                        <div class="total-viewers">1.7M viewers</div>
                        <div class="play">
                            <a href="http://tv.alfajertv.com/live-westbank-4.php"  target="_blank"   ><ion-icon name="play-circle-outline"></ion-icon></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <img src="HBO-Logo-square.jpg" alt="" class="avatar">
                        <h3 class="card-title">Game of Thrones <br> Season 5 - Mother's Mercy</h3>
                    </div>

                </div>

                <div class="live-card">

                    <div class="card-head">
                        <img src="vikins.jpg" alt="" class="card-img">
                        <div class="live-badge">LIVE</div>
                        <div class="total-viewers">468K viewers</div>
                        <div class="play">
                            <a href="https://iegybest.co/site/%D8%A7%D9%81%D9%84%D8%A7%D9%85-%D8%A8%D8%AB-%D9%85%D8%A8%D8%A7%D8%B4%D8%B1/"  target="_blank"   >      <ion-icon name="play-circle-outline"></ion-icon></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <img src="HBO-Logo-square.jpg" alt="" class="avatar">
                        <h3 class="card-title">Vikings <br> Season 4 - What Might Have Been</h3>
                    </div>

                </div>

            </div>

        </section>

    </main>
    <footer>

        <div class="footer-content">

            <div class="footer-brand">
                <img src="logo.png" alt="" class="footer-logo">
                <p class="slogan">Movies & TV Shows, Online cinema,
                    Movie database HTML Template.</p>


            </div>


            <div class="footer-links">
                <ul>

                    <h4 class="link-heading">MovieX</h4>

                    <li class="link-item"><a href="#">About us</a></li>
                    <li class="link-item"><a href="#">My profile</a></li>
                    <li class="link-item"><a href="#">Contacts</a></li>

                </ul>

                <ul>

                    <h4 class="link-heading">Browse</h4>

                    <li class="link-item"><a href="#">Live Tv</a></li>

                    <li class="link-item"><a href="#">TV Shows</a></li>
                    <li class="link-item"><a href="#">Movies</a></li>
                </ul>


            </div>

        </div>

        <div class="footer-copyright">

            <div class="copyright">
                <p>&copy; copyright 2022 MovieX</p>
            </div>

            <div class="wrapper">
                <a href="#">Privacy policy</a>
                <a href="#">Terms and conditions</a>
            </div>

        </div>

    </footer>

</div>

<script src="main.js"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>