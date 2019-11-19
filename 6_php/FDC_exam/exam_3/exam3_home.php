 <?php 
 include 'db_connect_exam3.php';
var_dump($_SESSION);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>


<?php 



// $per_page = 5;
// $pages_query = mysql_query("SELECT COUNT(id) FROM ('　')")




// difine how many results you want per page

// find out the number of results restored in database
           $sql= "SELECT * FROM members WHERE id = " . $_SESSION['user_id']; 
          $result = mysqli_query($CONNECTION,$sql);


          $row = mysqli_fetch_assoc($result);
      var_dump($row['id']);

// UPDATE `fdc_ exam`.`members` SET `username` = 'rerdda' WHERE `members`.`id` =11;



//       $sql ="UPDATE members SET Name = '$_POST[username]',Email ='$_POST[email]','Password ='$_POST[password]' WHERE ID=$_POST"




// delete

if (isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM members WHERE id=$id") or die($mysqli->error());  
}

 ?>


 <br>
 <br>
 <body class="text-center">
        <form class="form-signin" method="POST">
            <h3>Change your information</h3>

            <!-- email daddress -->
            <label for="inputEmail" class="sr-only"></label>
            <input type="id"  value="<?php echo $row['id']; ?>" >
<br>
            <!-- passwprd -->
            <label for="inputPassword" class="sr-only"></label>
            

            <div class="checkbox mb-3">
                <label>
                    
                </label>
            </div>

            <!-- login button -->
         

            <input type="text" name ="User_name"value="<?php echo $row['username']; ?>" class="form-control" >
            <br>

            <input type="text"  name="Email">  value="<?php echo $row['email']; ?>" class="form-control"  >
            <br>

            <input type="text" name="Password"> value="<?php echo $row['password']; ?>" class="form-control">
            <br>
     
                <button  type="submit" >Register</button>


     
                <!--   -->
                <a href="login_exam.php?edit=<?php echo $row['id']?>">Edit</a>
                <a href="exam3_home.php?delete=<?php echo $row['id']?>"
                 >Delete</a>




        </form>



    </body>
          <a class="nav-link" href="login_exam.php?logout=ture">Sign out</a>
     
   
  </body>
</html>