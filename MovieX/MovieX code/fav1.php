<?php
session_start();

if (isset($_GET['cartid1'])) {
    $id = $_GET['cartid1'];
$iduser = $_GET['userid'];
$im= $_GET['im'];
$db = new mysqli('localhost', 'root', '', 'moviex');
$qryStr = "select * from `movie` where Id='$id'";
$res = $db->query($qryStr);
if(isset($_GET['cartid1']) ) {
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['Id'];
            $_SESSION['cartid1'] = $id;
            $typ = $row['Photo'];

        }
        $db->close();
        try {

            $db = new mysqli('localhost', 'root', '', 'moviex');
            $qyrstr = "INSERT INTO movieanduser (`Id`,`Idm`,`Emailg`,`mphoto`) VALUES  ('".null."','".$id."','".$iduser."',' ".$typ."')";
            $rs = $db->query($qyrstr);
            $db->commit();
            $db->close();
            if ($rs  ) {
                header('location:fav.php');
            }

        }
        catch (Exception $exception) {
        }
    }}}
?>

