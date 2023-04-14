<?php
session_start();
if (isset($_POST['username']) && isset($_POST['useremail']) && isset($_POST['userpass']) && isset($_POST['usernumber']) && isset($_POST['useraddress'])&& isset($_POST['gg'])) {
    $username = $_POST['username'];
    $uaddr = $_POST['useremail'];
    $upassword = $_POST['userpass'];
    $uemail = $_POST['usernumber'];
    $udate = $_POST['useraddress'];
    $f= $_POST['gg'];

    try {
        $db = new mysqli('localhost', 'root', '', 'moviex');
        $qyrstr = "INSERT INTO movie  (`Name`, `Id`, `Summary`, `Classificationtype`, `Photo`, `video`) VALUES  ('".$username."', '".$uaddr."', '".$upassword."', '".$uemail."', '".$udate."', '".$f."')";

        $rs = $db->query($qyrstr);
        $db->commit();
        $db->close();
        if ($rs == 1) {
            header('Location:addfilm.php');

        } else {
            echo '<script type="text/javascript">

            window.onload = function () { alert("id is already used before !!"); }
            </script>';
        }
    } catch (Exception $e) {

    }
}



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
    <link rel="stylesheet" href="addfilm.css">

    <title>MovieX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <div class="m" style="width: 1518px">
        <img src="logo.png" class="logo" width="75">
        <ul>
            <li class="l s1"> <a href="sm.php"><span class="icon"><i class="fa fa-sign-in" ></i></span> <span class="text">Back</span> </a></li>
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

<section class ="contact" style="margin-right: 900px">

    <div style="margin-left: 1500px "  class="add">
        <div class="add-html">
            <label   class="titlabel">Adding New Film</label>

            <div class="add-form">
                <form action="addfilm.php" method="post">
<!--                    <div class="addfilm">-->
                        <div class="group">
                            <label for="user" class="label">Film Name</label>
                            <input id="user" type="text" class="input" name="username">
                        </div>
                        <div class="group">
                            <label for="usereid" class="label">ID</label>
                            <input id="usereid" type="text" class="input" name="useremail">
                        </div>
                        <div class="group">
                            <label for="userdes" class="label">Write the Description</label>
                            <textarea id="userdes" class="textdesc" rows="8" cols="50" name="userpass" > </textarea>
                        </div>
                        <div class="group">
                            <label for="filmtype" class="label">choose the type of movie</label>
                            <input id="filmtype" type="text" class="input" name="usernumber">
                        </div>
                        <label  class="label">Change photo</label>

                        <div class="group2">
                            <label for ="myFile" class="label1">Choose files</label>

                            <input  type="file" class="hide" id="myFile" multiple value="change film" name="useraddress">
                        </div>
                        <label  class="label">Change film</label>

                        <div class="group3">
                            <label for="myFile1" class="label1">Choose files</label>
                            <input  type="file" class="hide2" id="myFile1" multiple value="change film" name="gg">
                        </div>

                        <div class="group">
                            <input type="submit" class="button" value=" Upload Movie">
                        </div>
                    </div></form>
            </div>
        </div>
    </div>
    </div>
</section>
</body>
</html>