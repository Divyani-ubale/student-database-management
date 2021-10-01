
<?php  include "header.php" ?>

<?php 

  if(isset($_POST['create'])) 
    {
	
        $studname = $_POST['studname'];
        $department = $_POST['department'];
        $age = $_POST['age'];
      
        
        $query= "INSERT INTO users(studname, department, age)  VALUES('{$studname}','{$department}','{$age}')";
        $add_user = mysqli_query($conn,$query);
    
      
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add User details </h1>
  <div class="container">
    <form action="" method="post">
 
      <div class="form-group">
        <label for="studname" class="form-label">Studname</label>
        <input type="text" name="studname"  class="form-control">
      </div>

      <div class="form-group">
        <label for="department" class="form-label">Department</label>
        <input type="text" name="department"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="age" class="form-label">Age</label>
        <input type="text" name="age"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>


<?php include "footer.php" ?>