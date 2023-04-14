<?php
if(isset($_POST['sub']))

{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "moviex";
    $db=new mysqli('localhost','root','','moviex');
    $id = $_POST['id'];
    $new = $_POST['new'];
    $s2="select * From admin where Email='".$id."'";
    $res= $db->query($s2);
    $s3 = "update admin set Password='".SHA1($new )."' where email='".$id."'";
    $result1 = mysqli_query($db, $s3);

    if($s3)
    {
//        echo 'Data Updated';
        header('Location:user.php ');
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($db);
}
?>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="pass.css">
<link rel="shortcut icon" href="logo.png" type="image/png">

<link rel="stylesheet" href="dd.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

<title> MovieX </title>
<link rel="icon" href="244045494_4444413118973348_6341370727680401580_n.png">


<div class="main">
    <div class="m" style="margin-left: 10px">
        <img src="logo.png" class="logo" width="75" style="margin-left: 50px">
        <ul style="margin-left: 1000px">
            <li class="l s1 "> <a href="sm.php"><span class="icon"> <i class="fa fa-sign-in" ></i></span> <span class="text">Back</span> </a> </li>

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
    <div class="container" style="margin-top: 50px">
        <div id="square">
            <div class="front">
                <h1>Change Password</h1>
                <form action="passa.php" method="post">
                    <input
                        required
                        type="email"
                        name="id"
                        id="email"
                        placeholder="Email"
                    />
                    <input
                        required
                        type="password"
                        name="new"
                        id="password"
                        placeholder="Password New"
                    />
                    <button type="submit" name="sub">Change</button>
                </form>
            </div>

            <!--            <button id="frontSide" type="button">Login</button>-->
        </div>
    </div>
</div>
