<?php 
include 'includes/Admin header.php';
include 'process.php';
if(isset($_POST['submit']))
{
  include 'includes/connect.php';



}


?>
    <div class="w3-container" id="update">
            <form class="w3-container w3-card-4" action="process.php" method="POST">
                <h2 class="w3-text-blue">UPDATE BOOK INFORMATION</h2>
                <p>Fill in the fields below </p>

                <p>      
                <label class="w3-text-blue"><b>Book ID</b></label>
                <input class="w3-input w3-border" name="bkid" type="number" value="<?php echo $id; ?>" placeholder="<?php echo $id ?>"></p>
                <p>      
                <label class="w3-text-blue"><b>Book Name</b></label>
                <input class="w3-input w3-border" value="<?php echo $name; ?>" name="name" type="text"></p>
                <p>      
                        <label class="w3-text-blue"><b>Authour</b></label>
                        <input class="w3-input w3-border" value="<?php echo $authour; ?>" name="authour" type="text"></p>
                         <p>      
                <label class="w3-text-blue"><b>Price</b></label>
                <input class="w3-input w3-border" name="price" value="<?php echo $price; ?>"  type="text"></p>
                <p>      
                <label class="w3-text-blue"><b>Select Cover Page</b></label>
                <input class="w3-input w3-border" value="<?php echo $cover; ?>" name="coverpage" type="file"></p>
                
               
                <input class="w3-btn w3-blue" type="submit" name="updated" value="UPDATE">
              </form>
    </div>

 </div>  
  <?php
  
include 'includes/footer.php';
?>



