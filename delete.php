 
<?php  include "header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $userid= $_GET['delete'];

         
         $query = "DELETE FROM users WHERE id = {$userid}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
              ?>

  
<?php include "footer.php" ?>