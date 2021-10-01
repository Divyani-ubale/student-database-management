
<?php include "header.php"?>

<?php
   
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      
      $query="SELECT * FROM users WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $studname = $row['studname'];
          $department = $row['department'];
          $age = $row['age'];
        }
 
    
    if(isset($_POST['update'])) 
    {
      $studname = $_POST['studname'];
      $department = $_POST['department'];
      $age = $_POST['age'];
      
      
      $query = "UPDATE users SET studname = '{$studname}' , department = '{$department}' , age = '{$age}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update User Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="studname" >Studname</label>
        <input type="text" name="studname" class="form-control" value="<?php echo $studname  ?>">
      </div>

      <div class="form-group">
        <label for="department" >Department</label>
        <input type="text" name="department"  class="form-control" value="<?php echo $department  ?>">
      </div>
        
    
      <div class="form-group">
        <label for="age" >Age</label>
        <input type="text" name="age"  class="form-control" value="<?php echo $age  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>


<?php include "footer.php" ?>