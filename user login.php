<?php 

include 'includes/header1.php';

include 'includes/connect.php';



?>

<div id="content">

    <div class="w3-container">

            <form class="w3-container w3-card-4" action="process.php" method="POST">
                <h2 class="w3-text-blue">USER LOGIN</h2>
                <p>Fill in the fields below </p>
                <p>      
                <label class="w3-text-blue"><b>Name</b></label>
                <input class="w3-input w3-border" name="username" type="text"></p>
                
                <p>      
                        <label class="w3-text-blue"><b>password</b></label>
                        <input class="w3-input w3-border" name="pass" type="password" required></p>
            
                <p>      <a href="#">forgot password</a><br><br>
                <a href="user signin.php">Create your account</a><br><br>
                       
                <input class="w3-btn w3-blue" type="submit" name="submit" value="Login" >
              </form>
    </div>

 </div> 


 
<?php

// if(isset($_POST['submit'])){
//         $username = $_POST['name'];
//         $password = $_POST['password'];
 
//         $sql="SELECT * FROM `user` WHERE `name`='$username' and `password`='$password'";
//        $result = mysqli_query($connect,$sql);
//        while($row = mysqli_fetch_array($result)){
//                $_SESSION["user"] = $row["name"];
//        }

//        if($row[`name`]==$username && $row[`password`]==$password){
        
//         echo "login successfull welcome";
//         header("location:user.php");

//         // echo '<script type="text/javascript">
//         // window.location="user.php";
//         // prompt("hello world");
//         // </script>';	
   
//     }
//     else{
//         echo " login fail ";
//     }
        
    

// }
?>

   <?php
include 'includes/footer.php';
?>

