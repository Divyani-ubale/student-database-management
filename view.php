
<?php  include "header.php"?>

<h1 class="text-center">User Details</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th  scope="col" >ID</th>
          <th  scope="col">studname</th>
          <th  scope="col">depatment</th>
          <th  scope="col"> age</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              

              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  
                $query="SELECT * FROM users WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $studname = $row['studname'];
                      $department = $row['department'];
                      $age = $row['age'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$studname}</td>";
                        echo " <td > {$department}</td>";
                        echo " <td >{$age} </td>"; 
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>


<?php include 'footer.php' ?>