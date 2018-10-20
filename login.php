<?php
include 'sqlconnect.php';

$uid = $_POST['uidl'];
$pwd = $_POST['pwdl'];

$sql = ("SELECT * FROM gamedb.gamers WHERE uid='$uid' AND pwd='$pwd'");
$res = mysqli_query($conn, $sql);

if ($res) {
    echo "You are Loged In";
    header("Location: game.php");
} else {
    echo "Incorrect Details: " . $sql . "<br>" . $conn->error;
}
