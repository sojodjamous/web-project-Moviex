<?php
session_start();
          $iduser=$_SESSION['e'];
                $db = new mysqli('localhost', 'root', '', 'moviex');
                $qryStr = "select * from admin where Email='$iduser' ";
                $res = $db->query($qryStr);
                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $img=$row['Photo'];


}}
                    $db->close();


?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>MovieX</title>
    <link rel="shortcut icon" href="logo.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="sm.css">


</head>
<body>
<video id="o" src="m3.mp4" muted loop autoplay ></video>
<div class="m">
    <img src="logo.png" class="logo" width="75">
</div>
<div class="card">
    <button class="fa fa-bars" style="color: #ae09f5"></button>
    <div class="content">
        <div class="imgbox">
            <?php
            echo'<div>
             <img id="t" src="'.$img.'" >  ' ;
            ?>
        </div>

    </div>
        <div class="info">
            <div class="name-job">
                <form action="sm.php" method="get">
                   <?php echo ' <div><h1>Welcome to MoviaX '. $_SESSION['User']. '</h1></div>'  ?>
                </form>
                <h4>MovieX</h4>
            </div>
            <div class="txt">
                <p> Welcome</p>
            </div>
        </div>

    </div>
    <div class="icons">


        <a href="#"><i class="fa fa-home" style="color: #ae09f5" ></i></a>
        <a href="ma.php"> <i class="fa fa-film" style="color: #ae09f5"></i></a>
        <a href="passa.php">  <i class="fa fa-unlock-alt"  style="color: #ae09f5"></i></a>
        <a href="tabel.php">  <i class="fa fa-users" style="color: #ae09f5"></i></a>
        <a href="cadm.php">  <i class="fa fa-comments"style="color: #ae09f5" ></i></a>
        <a  target="_blank" href="https://www.google.com/gmail/"> <i class="fa fa-envelope"style="color: #ae09f5" ></i></a>
        <a href="addfilm.php"> <i class="fa fa-file-video" aria-hidden="true"style="color: #ae09f5"></i></a>
        <a href="thefirstp.php">  <i class="fa fa-sign-out" style="color: #ae09f5"></i></a>
    </div>

</div>
</body>
</html>
<!--            <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'">-->


<!--




