<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="variable.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <title>MovieX</title>
    <link rel="stylesheet" href="moves.css">

    <link rel="stylesheet" href="stylep1.css">
    <link rel="stylesheet" href="mf.css">
</head>
<body>
<section class="showcase">
    <header>
        <img src="logo.png" class="logo" >
        <div class="m"  >
<!--            style="display: contents"-->
            <ul  >
                <li  style="margin-left: 70px" class="l s1"> <a href="thefirstp.php"><span class="icon"><i class="fa fa-home" ></i></span> <span class="text">Home</span> </a> </li>
<!--                <li style="padding-right:10px" class="l "> <a href="index.php"><span class="icon"><i class="fa fa-film" ></i></span> <span class="text">Movies</span> </a> </li>-->
                <li  class="l "> <a href="user.php"><span class="icon"><i class="fa fa-user"></i></span> <span class="text">User</span> </a> </li>
                <li  class="l "> <a href="masa1.php"><span class="icon"><i class="fa fa-comments"></i></span> <span class="text">Contact</span> </a> </li>
                <div class="in" style="margin-left: 70px"></div>
            </ul>
        </div>
        <script>
            const l=document.querySelectorAll('.l');
            function activelink(){
                l.forEach((item) =>
                    item.classList.remove('s1'));
                this.classList.add('s1')
            }
            l.forEach((item) =>
                item.addEventListener('click',activelink));
        </script>
    </header>
    <video id="o" src="m2.mp4" muted loop autoplay ></video>
    <div class="overlay"></div>
    <div class="text">
        <h3 style="margin-top: 100px">   When you see imagination possible</h3>
        <p> Watching movies takes you to another world, where anything you don't expect can happen, when you feel tired of the outside world take your popcorn and your blanket and come to the other world, the world of movies</p>
        <a href="user.php"> Sign in</a>

    </div>
    </div>
    <div class="mov">
        <div class="side left"></div>
        <div class="side botin">
            <i class="fa fa-download"></i>
            <i class="fa fa-film"></i>
            <i class="fa fa-envelope-open"></i>
            <i class="fa fa-star" ></i>

        </div>
        <div class="side main">
            <!--<img src="/CineFlix (1)/1.png">-->
            <video src="am.mp4" autoplay  controls style="height: 450px"></video>
        </div>


    </div>
</section>

</body>
</html>