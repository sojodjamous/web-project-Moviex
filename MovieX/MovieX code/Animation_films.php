<?php

$id='Animation' ;

session_start();
$iduser=$_SESSION['e'];
$db = new mysqli('localhost', 'root'
    , '', 'moviex');
$qryStr =  "SELECT * FROM  movie  WHERE `Classificationtype`='$id' ";
$res = $db->query($qryStr);

$db->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="variable.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="fav.css">
    <title>MovieX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <div class="m">
        <img src="logo.png" class="logo" width="75">
        <ul>
            <li class="l s1"> <a href="index.php"><span class="icon"><i class="fa fa-sign-in" ></i></span> <span class="text">Back</span> </a></li>
            <div class="in"></div>
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

<section class ="contact">
    <div class="tit" style="
    font-size: 26px;
    font-family: Cursive;
    padding-bottom: 30px;
    text-shadow: 10px 5px 10px #ba0cf8, 0 0 5px #ba0cf8;
">
        <h2>Animation Films</h2>
    </div>

<!--    <div class="all">-->
        <?php
        if ($res)
        while ($row = mysqli_fetch_assoc($res)) :?>
            <div class="all" style="display: contents">
        <div class="mov">
            <div class="side left"></div>
            <div class="side botin">
                <i class="fa fa-download"></i>
                <i class="fa fa-film"></i>
                <i class="fa fa-envelope-open"></i>
                <i class="fa fa-star" ></i>



            </div>
            <div class="side main">


                <?php
                $img=$row['Photo'];
                echo'<div>
             <img style="height: 240px" id="t" src="'.$img.'" >  </div>' ;
                ?>


            </div>

        </div>



    </div>

    </div>
    <?php

    endwhile; ?>

</section>
</body>

</html>