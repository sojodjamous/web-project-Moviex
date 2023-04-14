<?php
session_start();
if(isset($_GET['cartid']) ){
$iduser=$_GET['cartid'];
$db = new mysqli('localhost', 'root'
    , '', 'moviex');
$qryStr = "select * from movie where Id='$iduser' ";
$res = $db->query($qryStr);
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $img=$row['Photo'];
        $ve=$row['video'];
$tt=$row['Summary'];

    }}}
$db->close();

//$id=$_GET['cartid'];
//$iduser = $_SESSION['e'];
//$im=$img;
//if(isset($_POST["eh"])) {
//
//    echo '<a href="fav1.php?cartid1=' . $id . '& userid=' . $iduser . '& im=' . $im. '" > </a>';
//
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <title>MovieX</title>
    <link rel="stylesheet" href="filmUserBack.css">
    <link rel="stylesheet" href="filmsUser.css">
    <link rel="stylesheet" href="menu.css">

    <link rel="stylesheet" href="films.css">
    <link rel="stylesheet" href="media_query.css">
    <link rel="stylesheet" href="fsh.css">
    <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .m{
        width: 1510px;

    }
  .logo{
      margin-right: auto;
      margin-left: 160px;
      width: 75px;
      height: 100px;
  }

</style>

</head>
<body style="display: flow">
<!--<div class="container">-->
    <div class="m" >
        <img src="logo.png" class="logo" width="75" style="margin-left: 50px">
        <ul style="margin-left: 1000px">
            <li class="l s1 "> <a href="index.php"><span class="icon"> <i class="fa fa-sign-in" ></i></span> <span class="text">Back</span> </a> </li>

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

</div>

<div class ="filmName">
    <h2>John Wick</h2>
</div>
<div class="filminfo" >
    <div class="genre" style="margin-right: 20px">
        <i class="fa fa-film" aria-hidden="true" style="color: #AF09F6FF"></i>
        <span>Action/Thriller </span>
    </div>
    <div class="calender" style="margin-right: 20px">
        <i class="fa fa-calendar-check" aria-hidden="true" style="color: #AF09F6FF"></i>
        <span>2019    </span>
    </div>
    <div class ="time" style="margin-right: 20px">
        <i class="fa fa-clock" aria-hidden="true" style="color: #AF09F6FF"></i>
        <span>2h 11m</span>
    </div>
    <div class="quilty" style="margin-right: 5px">
        <i class="fa fa-television" aria-hidden="true" style="color: #AF09F6FF"></i>
    </div>
    <span>4k</span>


</div>
<section class="banner">

    <div class="banner-card">



        <div class="des">
            <div class="description">
                <div class="textDes">
                    <?php
                    echo'<div>
 <p>'.$tt.'</p>';

                    ?></div>
<!--                    <p>Legendary assassin John Wick (Keanu Reeves) retired from his violent career after marrying the love of his life. Her sudden death leaves John in deep mourning. When sadistic mobster Iosef Tarasov (Alfie Allen) and his thugs steal John's prized car and kill the puppy that was a last gift from his wife, John unleashes the remorseless killing machine within and seeks vengeance. Meanwhile, Iosef's father (Michael Nyqvist) -- John's former colleague -- puts a huge bounty on John's head.</p>-->
                </div>

            </div>
            <div class="poster">
                <?php
                echo'<div>
             <img id="t"   src="'.$img.'" >  ' ;
                ?>
            </div>
        </div>

    </div>

</section>
<div class="viid">
    <div class="film">
        <video id="film1" width="1000" controls>
<!--            --><?php
//            echo'<div>
// <source src="'.$ve.'" type="video/mp4">';
//
//            ?>
<!--    </div>-->
            <source src="Trailer.mp4" type="video/mp4">

        </video>
    </div>
    <div class="buttons">
        <a class="inputBox">
            <form method="post" >

            <input type="submit" name="eh" value="Options " style="width: 200px" >
            <?php
            $id=$_GET['cartid'];
            $iduser = $_SESSION['e'];
            $im=$img;
            if(isset($_POST["eh"])) {

                echo ' <a href="fav1.php?cartid1=' . $id . '& userid=' . $iduser . '& im=' . $im. '"style="margin-top: 10px;margin-left: 15px"><h3 style="margin-left: 15px">Add to favorite</h3> </a>';
//                echo ' <a href="fav1.php?cartid1=' . $id . '& userid=' . $iduser . '& im=' . $im.">" ;


            }
            ?>
            </form>
        </a>

        <a class="inputBox1" style="padding-left: 500px"  href="Trailer.mp4" download="file name">
            <input type="submit" name="" value="Download" id="btn" >
           <a href="Trailer.mp4" download="file name">
        </a>

    </div>
</div>
</div>
</body>
</html>
