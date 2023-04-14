<?php

session_start();
if(isset($_GET['deleteid']) ) {
    $id = $_GET['deleteid'];
$db = new mysqli('localhost', 'root'
    , '', 'moviex');
     $s= "Delete From movie where Id= '$id'";
    $res=$db->query($s);

if($res){
header('location:ma.php');}}
$db->close();

?>