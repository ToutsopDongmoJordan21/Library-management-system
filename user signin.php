<?php 
include 'includes/header1.php';

if(isset($_POST['submit']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $tel=$_POST['tel'];
   $password=$_POST['password'];
   $password1=$_POST['password1'];
   $address=$_POST['address'];

  include 'includes/connect.php';

   if($password==$password1){
        $query="INSERT INTO `user`( `name`, `telephone`, `email`, `address`, `password`) VALUES ('$name','$tel','$email','$address','$password')";
        $result=mysqli_query($connect,$query);
     
        if($result){
                echo $name;
            echo " your data has been inserted";
           
        }
        else{
            echo "not inserted";
        }
       /* mysqli_free_result($result);
        mysqli_close($connect);*/
     }

     else{
             echo '<div class="panel panel-danger">
             <div class="panel-heading">Warning</div>
             <div class="panel-body">Passwords do not match</div>
           </div>';
     }
   }




?>
<div id="content">

    <div class="w3-container">
            <form class="w3-container w3-card-4" action="process.php" method="POST">
                <h2 class="w3-text-blue">USER SIGN IN</h2>
                <p>Fill in the fields below </p>
                <p>      
                <label class="w3-text-blue"><b>Name</b></label>
                <input class="w3-input w3-border" name="name" type="text" required></p>
                <p>      
                        <label class="w3-text-blue"><b>Tel</b></label>
                        <input class="w3-input w3-border" name="tel" type="text" required></p>
                         <p>      
                <label class="w3-text-blue"><b>Email</b></label>
                <input class="w3-input w3-border" name="email" type="email" required></p>
                <p>      
                <label class="w3-text-blue"><b>Address</b></label>
                <input class="w3-input w3-border" name="address" type="text" required></p>
                <p>      
                        <label class="w3-text-blue"><b>choosea password</b></label>
                        <input class="w3-input w3-border" name="password1" type="password" required></p>
            
                <p>      
                        <p>      
                                <label class="w3-text-blue"><b>confirm password</b></label>
                                <input class="w3-input w3-border" name="password" type="password"></p>
                <input class="w3-btn w3-blue" type="submit" name="submit" value="Submit" >
              </form>
    </div>

 </div>   <?php
include 'includes/footer.php'
?>



