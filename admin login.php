<?php 
include 'includes/Admin header.php';

// if(isset($_POST['submit']))

// $name = $_POST['name'];
?>
<div id="content">

    <div class="w3-container">
            <form class="w3-container w3-card-4" action="process.php" method="POST">
                <h2 class="w3-text-blue">ADMIN LOGIN</h2>
                <p>Fill in the fields below </p>
                <p>      
                <label class="w3-text-blue"><b>Name</b></label>
                <input class="w3-input w3-border" name="username" type="text" required></p>
                
                <p>      
                        <label class="w3-text-blue"><b>password</b></label>
                        <input class="w3-input w3-border" name="pass" type="password"required></p>
            
                <p>      
                       
                <input class="w3-btn w3-blue" type="submit" name="adminsubmit" value="Login" >
              </form>
    </div>

 </div> 

   <?php
include 'includes/footer.php'
?>
