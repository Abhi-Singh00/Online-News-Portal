<?php
		session_start();
?>
<?php

include('connection.php');

if(isset($_POST['submit'])){
     $email = $_POST['email'];
     
     $q = "INSERT INTO `unsubscribed_users`(`email`) VALUES ('$email')";

     $query = mysqli_query($con, $q);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset = "UTF-8">
     <title>Unsubscribed List</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
 echo '<h3>Hello<h3> '.$_SESSION['user'];
?>

    <div class="container">
         <h2 class="text-center mt-4"> Unsubscribed Customer List</h2>
         <div class="d-flex justify-content-end">
         <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add student</button>
		<button onclick =" window.location.href = 'index.php' ">Visit Website</button>
		  
		  
</div>
    
    <table class="table mt-3">
         <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Email</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
   
   
   
    <?php

    $q = 'SELECT * from unsubscribed_users';

    $query = mysqli_query($con,$q);

    $count = 1;

    while($result = mysqli_fetch_array($query)){

    ?>
    <tr>
      <th scope="row"><?php echo $count; ?></th>
      <td><?php echo $result['email']; ?></td>
      <td><?php echo $result['pay_time']; ?></td>
      <td>
      <a href="edit.php?id=<?php echo $result['id']; ?> ">
      <i class="fa fa-pencil mr-2 text-primary" aria-hidden="true"></i>
      </a>
      <a href="delete.php?id=<?php echo $result['id']; ?> ">
      <i class="fa fa-trash text danger" aria-hidden="true"></i>
      </a>
      </td>
    </tr>
<?php $count++;} ?>
  </tbody>
</table>

<!--Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
        <form method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
            </div>
            
            <button type="submit"  class="btn btn-primary" name="submit" >Submit</button>
        </form>
      </div>
    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
    </div> -->
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"  ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</body>
</html>