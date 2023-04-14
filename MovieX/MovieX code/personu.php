<?php
session_start();
$iduser=$_SESSION['e'];
$db = new mysqli('localhost', 'root', '', 'moviex');
$qryStr = "select * from user where Email='$iduser' ";
$res = $db->query($qryStr);
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $i=$row['Email'];


    }}
$db->close();


?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="ps.css">
<link rel="shortcut icon" href="logo.png" type="image/png">

<link rel="stylesheet" href="dd.css">
<link rel="stylesheet" href="t1.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    button{

        border: 0;
        padding: 10px 0;
        outline: none;
        min-height: 30px;
        min-width: 60px;
        /*font-size: 20px;*/
        border-radius: 4px;
        background-color: #d000ff;
    }

</style>
<title> MovieX </title>
<link rel="icon" href="244045494_4444413118973348_6341370727680401580_n.png">


<div class="main">
    <header>
        <div class="m">
            <img src="logo.png" class="logo1"width="75">
            <ul style="margin-left: 800px">
                <li class="l "> <a href="index.php"><span class="icon"><i class="fa fa-film" ></i></span> <span class="text">Moves</span> </a> </li>
                <li class="l "> <a href="fav.php"><span class="icon"><i class="fa fa-star" ></i></span> <span class="text">Favorite</span> </a> </li>

                <li class="l  "> <a href="masa2.php"><span class="icon"><i class="fa fa-comments"></i></span> <span class="text">Contact</span> </a> </li>
                <li class="l s1"> <a href="personu.php"><a href="#"><span class="icon"><i class="fa fa-male" ></i></span> <span class="text">Personal</span> </a></a>  </li>
                <li class="l  "> <a href="thefirstp.php"><span class="icon"><i class="fa fa-sign-out"></i></span> <span class="text">Sign out</span> </a> </li>
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
    <!--    <video id="videoBG" src="m3.mp4" muted loop autoplay ></video>-->

    <div class="icons1" style="padding-bottom: 0px" >

        <div class="icon1" >

            <i class="fa fa-unlock-alt front" ></i>
            <i class="fa1 fa-unlock-alt back" ></i>
            <i class="fa1 fa-unlock-alt left" ></i>
            <i class="fa1 fa-unlock-alt right" ></i>
            <i class="fa1 fa-unlock-alt top" ></i>
            <i class="fa1 fa-unlock-alt bottom" ></i>

        </div>
        <div class="icon1">
            <i class="fa fa-star front" ></i>
            <i class="fa1 fa-star back" ></i>
            <i class="fa1 fa-star left" ></i>
            <i class="fa1 fa-star right" ></i>
            <i class="fa1 fa-star top" ></i>
            <i class="fa1 fa-star bottom" ></i>


        </div>
        <div class="icon1">


            <i class="fa fa-sign-out front" ></i>
            <i class="fa1 fa-sign-out back" ></i>
            <i class="fa1 fa-sign-out left" ></i>
            <i class="fa1 fa-sign-out right" ></i>
            <i class="fa1 fa-sign-out top" ></i>
            <i class="fa1 fa-sign-out bottom" ></i>


        </div>

    </div>

    <div class="container" style="margin-top: 20px">
        <div id="square">
            <div class="front">
                <div class="imgbox">
                    <img id="t" src="1s.jpg"  >
                </div>
                    <?php echo ' <div   ><h3 >Welcome '. $_SESSION['User']. '</h3></div>'  ?>


                 <div>
                    <button type="submit"><a href="pass.php"> <i class="fa fa-unlock-alt" aria-hidden="true"  style="color: #2c1632"></i></a></button>
                    <button type="submit"> <a href="fav.php"><i class="fa fa-star" aria-hidden="true"  style="color:  #2c1632"></i></a></button>
                    <!--                <a href="pass.html"> <i class="fa fa-unlock-alt" aria-hidden="true"  style="color: #2c1632"></i></a>-->
                    <!--                <a href="fav.html.html">    <i class="fa fa-star" aria-hidden="true"  style="color:  #2c1632"></i></a>-->
                </div>

            </div>
        </div>
    </div>
</div>
