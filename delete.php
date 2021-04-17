<?php
 include 'connection.php';
$id = $_GET['id'];

$q = "DELETE FROM `unsubscribed_users` WHERE id = $id";

mysqli_query($con, $q);

header('location:unsubscribedlist.php');
?>