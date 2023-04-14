<?php
session_start();
if(isset($_POST['EA'])&&isset($_POST['PA'])){
$username=$_POST['EA'];
$upassword=$_POST['PA'];
try{
$db=new mysqli('localhost','root','','moviex');
$qyrstr="select * from admin";
$res= $db->query($qyrstr);
for($i=0;$i<$res->num_rows;$i++){
$row=$res->fetch_object();
if(   $row->Email==$username&&sha1($upassword)==$row->Password){
    $_SERVER['user']=$row->Name;
    $_SESSION['User']=$row->Name;
    $_SESSION['e']=$row->Email;

//    $username=$row->Name;
//    echo $username;
    header('Location:sm.php');
}

else {
echo '<script type="text/javascript">

    window.onload = function () { alert("Wrong  !!"); 
  
    }

</script>';        }

}

$db->close();
}
catch (  Exception $e){

}
}





if(isset($_POST['semail'])&&isset($_POST['spass'])){
    $username=$_POST['semail'];
    $upassword=$_POST['spass'];
    try{
        $db=new mysqli('localhost','root','','moviex');
        $qyrstr="select * from user ";
        $res= $db->query($qyrstr);
        for($i=0;$i<$res->num_rows;$i++){
            $row=$res->fetch_object();
            if(   $row->Email==$username&&sha1($upassword)==$row->Password){
                $_SESSION['e']=$row->Email;
                $_SESSION['User']=$row->Name;

                header('Location:personu.php');
            }

            else {
                echo '<script type="text/javascript">

    window.onload = function () { alert("Wrong  !!"); 
  
    }

</script>';        }

        }

        $db->close();
    }
    catch (  Exception $e){

    }
}


if (isset($_POST['username']) && isset($_POST['useremail']) && isset($_POST['userpass']) && isset($_POST['usernumber']) && isset($_POST['useraddress']) && isset($_POST['radio'])) {
    $username = $_POST['username'];
    $uaddr = $_POST['useremail'];
    $upassword = $_POST['userpass'];
    $uemail = $_POST['usernumber'];
    $udate = $_POST['useraddress'];

    $ugender = $_POST['radio'];

    try {
        $db = new mysqli('localhost', 'root', '', 'moviex');
        $qyrstr = "INSERT INTO user  (`Name`, `Email`, `Password`, `Phone`, `Address`, `gender`) VALUES  ('".$username."', '".$uaddr."', SHA1('".$upassword."'), '".$uemail."', '".$udate."', '".$_POST['radio']."')";

        $rs = $db->query($qyrstr);
        $db->commit();
        $db->close();
        if ($rs == 1) {
            header('Location:user.php');

        } else {
            echo '<script type="text/javascript">

            window.onload = function () { alert("Email is already used before !!"); }
            </script>';
        }
    } catch (Exception $e) {

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="variable.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="menu.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <title> MovieX </title>
    <link rel="stylesheet" href="signnup-user.css">
    <link rel="icon" href="244045494_4444413118973348_6341370727680401580_n.png">
    <style>
        .slider{
    width: 100%;
    height: 100vh;
            position: absolute;
            top: 0;
        }
        #slide{
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <div class="m">
        <img src="logo.png" class="logo1"width="75">
        <ul>

                <li  style="margin-left: 70px" class="l "> <a href="thefirstp.php"><span class="icon"><i class="fa fa-home" ></i></span> <span class="text">Home</span> </a> </li>
                <li  class="l s1"> <a href="user.php"><span class="icon"><i class="fa fa-user"></i></span> <span class="text">User</span> </a> </li>
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
<section class="showcase">
<video src="8.mp4" muted loop autoplay style="height: 120vh" ></video>



<div   class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">User Sign Up</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign In As User</label>
        <input id="tab-3" type="radio" name="tab" class="sign-up-delivery"><label for="tab-3" class="tab">Sign In As Admain</label>
        <div class="login-form">
            <form action="user.php" method="post" name="myform">
                <div class="signup-user">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="username">
                    </div>
                    <div class="group">
                        <label for="useremail" class="label">Email</label>
                        <input id="useremail" type="email" class="input" name="useremail">
                    </div>
                    <div class="group">
                        <label for="userpass" class="label">Password</label>
                        <input id="userpass" type="password" class="input" data-type="password" name="userpass">
                    </div>
                    <div class="group">
                        <label for="userphone" class="label">Phone number</label>
                        <input id="userphone" type="text" pattern="+970-[0-9]{9}" class="input" name="usernumber">
                    </div>
                    <div class="group">
                        <label for="useraddres" class="label">Address</label>
                        <input id="useraddres" type="text" class="input"  name="useraddress">
                    </div>
                    <div class="group1">
                        <br>
                        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<input type='radio' id='male' checked='checked' name='radio' value="Male">
                        <label for='male'>&nbsp Male &nbsp</label>
                        <input type='radio' id='female' name='radio' value="Female">
                        <label for='female'>Female</label>
                        <br>
                        <br>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                </div></form>
            <form action="user.php" method="post" name="myform">
                <div class="sign-up-htm">
                    <div class="group">

                    </div>
                    <div class="group">
                        <label for="owneremail" class="label">Email Address</label>
                        <input id="owneremail" type="Email" class="input" name="semail">

                    </div>
                    <div class="group">
                        <label for="ownerpass" class="label">Password</label>
                        <input id="ownerpass" type="password" class="input" data-type="password" name="spass">

                    </div>
                    <div class="group">

                    </div>
                    <div class="group">

                    </div>
                    <div class="group"style="margin-top: 50px">
                        <input type="submit" class="button" value="Sign In" name="signup">
                    </div>
                </div></form>
            <form action="user.php" method="post" name="myform">

            <div class="sign-up-deliv">

                <div class="group">
                    <label for="pass8" class="label">Email Address</label>
                    <input id="pass8" type="Email" class="input" name="EA">
                </div>
                <div class="group">
                    <label for="pass7" class="label">Password</label>
                    <input id="pass7" type="password" class="input" data-type="password" name="PA">

                </div>

                <div class="group" style="margin-top: 50px">
                    <input type="submit" class="button" value="Sign In " name="A">
                </div>
            </div>
            </form>
        </div>
    </div>

</div>

</section>
</body>
</html>
