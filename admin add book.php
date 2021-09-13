<?php 
include 'includes/Admin header.php';

if(isset($_POST['submit']))
{
  include 'includes/connect.php';



    $bkname=$_POST['name'];
    $authour=$_POST['authour'];
    $price=$_POST['price'];
    $coverpage=$_POST['coverpage'];
      
        $query="INSERT INTO `books`( `name`, `authour`, `fine`, `cover_page`) VALUES ('$bkname','$authour','$price','$coverpage')";
        $result=mysqli_query($connect,$query);
     
        if($result){
               echo $bkname;
            echo "  has been Added to the Booklist";
           
        }
        else{
            echo "not inserted";
        }
       /* mysqli_free_result($result);
        mysqli_close($connect);*/
     

    
   }




?>
<div id="content">

    <div class="w3-container">
            <form class="w3-container w3-card-4" action="" method="POST">
                <h2 class="w3-text-blue">ADD BOOK</h2>
                <p>Fill in the fields below </p>
                <p>      
                <label class="w3-text-blue"><b>Book Name</b></label>
                <input class="w3-input w3-border" name="name" type="text"></p>
                <p>      
                        <label class="w3-text-blue"><b>Authour</b></label>
                        <input class="w3-input w3-border" name="authour" type="text"></p>
                         <p>      
                <label class="w3-text-blue"><b>Price</b></label>
                <input class="w3-input w3-border" name="price" type="text"></p>
                <p>      
                <label class="w3-text-blue"><b>Select Cover Page</b></label>
                <input class="w3-input w3-border" name="coverpage" type="file"></p>
                
               
                <input class="w3-btn w3-blue" type="submit" name="submit" value="Add Book">
              </form>
    </div>

 </div>   <?php
include 'includes/footer.php'
?>



