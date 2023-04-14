<?php

    $query = "SELECT * FROM user ";
    $search_result = filterTable($query);


// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "moviex");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>

<html>

<head>
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="variable.css">
    <link rel="stylesheet" href="reset.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>MovieX</title>

    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" href="menu.css">


</head>

<body>
<header>
    <div class="m" style="margin-bottom: 100px">
        <img src="logo.png" class="logo" width="75" >
        <ul >
            <li class="l s1 "> <a href="sm.php"><span class="icon"> <i class="fa fa-sign-in" ></i></span> <span class="text">Back</span> </a> </li>
            <div  class="in"></div>
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

<h2 style=" text-shadow: 10px 5px 10px #FFFFFF,0 0 5px #FFffff;
"> User</h2>
<form action="tabel.php" method="post">

<table>

    <tr>

        <th>User Name</th>

        <th>Email</th>

        <th>Phone</th>

        <th> Gender</th>

        <th>Address</th>

    </tr>
    <?php
    while($row = mysqli_fetch_array( $search_result)):?>
        <tr>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Email'];?></td>
            <td><?php echo $row['Phone'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['Address'];?></td>



        </tr>
    <?php endwhile;?>

</table>

</body>


</html>





