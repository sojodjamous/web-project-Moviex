<?php
session_start();
$iduser=$_GET['cartid'];
$db = new mysqli('localhost', 'root'
    , '', 'moviex');
if(isset($_GET['cartid']) ){

    $qryStr = "select * from movie where Id='$iduser' ";
    $res = $db->query($qryStr);
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            $img=$row['Photo'];
            $ve=$row['video'];
            $tt=$row['Summary'];

        }}


}
$db->close();

$db = new mysqli('localhost', 'root'
    , '', 'moviex');
if(isset($_POST["ff"])||isset($_POST["n"])) {
    $f=$_POST["n"];
    $s3 = "update movie set Summary='$f ' where Id='$iduser'";
    $select = $db->query($s3);
    header('Location:ma.php');

} $db->close();



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

#t{
    width: 500px;
    height: 500px;
}


    </style>

</head>
<body>
<!--<div class="container">-->
<div class="m" >
    <img src="logo.png" class="logo" width="75" style="margin-left: 50px">
    <ul style="margin-left: 1000px">
        <li class="l s1 "> <a href="ma.php"><span class="icon"> <i class="fa fa-sign-in" ></i></span> <span class="text">Back</span> </a> </li>

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
                <?php echo'<div>
 <p>'.$tt.' </p>';?>
                <form method="post" action="mu.php">
                </form>
                    <div class="textDes">






                                </div>   </div>

            </div>

            <div class="poster">

                <?php
                echo'<div>
             <img id="t"   src="'.$img.'"  >  ' ;
                ?>
            </div>            </div>
        </div>

    </div>
    <form method="post" class="buttons">
        <div class="inputBox">
<!--            <form  >-->
            <textarea  rows="8" cols="50" name="n" > </textarea>

            <input type="submit" name="ff" value="Edit Text"style="margin-left: 100px" >
        </div>
        <div class="inputBox1" style="padding-lift: 540px">

        </div>
        <label  class="label" style="height: 35px;width: 150px">Change Poster</label>

        <div class="group3" style="height: 35px;width: 150px;margin-right: 300px">
            <label for="myFile1" class="label1">Choose files</label>
            <input  type="file" class="hide2" id="myFile1" multiple value="change poster" name="gg">
        </div>

    </div>
    </form>
</section>
<div class="viid">
    <div class="film">
        <video id="film1" width="1000" controls>

            <source src="Trailer.mp4" type="video/mp4">

        </video>
    </div>
        <div class="inputBox3" style="padding-left: 120px" >
            <label  class="label">Change Film</label>

            <div class="group3">
                <label for="myFile1" class="label1">Choose files</label>
                <input  type="file" class="hide2" id="myFile" multiple value="change film">
            </div>
        </div>
</div>
<!--    </form>-->

</body>
</html>
