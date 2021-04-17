<?php

include 'connection.php';
 $id = $_GET['id'];

if(isset($_POST['update'])){
   echo $email = $_POST['email'];
   


    $q =  "UPDATE `unsubscribed_users` SET `email`= '$email' WHERE id = $id";
    $query = mysqli_query($con, $q);
	header('location:unsubscribedlist.php');

	
}


echo"<form method='POST'>
    <div class='form-group'>
        <label for='email'>Update Email</label>
        <input type='text' class='form-control' name='email' id='email'>
    

    <button type='update' name='update' class='btn btn-primary'>update</button>
</form>";

?>