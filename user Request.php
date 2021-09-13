<?php

include 'includes/user header.php';


$cdate= date("d/m/y"); //$_POST['cdate'];
 
if(isset($_POST['submit']))
{
  include 'includes/connect.php';



    $user_name=$_POST['user_name'];
    $book_name=$_POST['book_name'];
    $message=$_POST['message'];
      
        $query="INSERT INTO `request`( `user_name`, `book_name`, `message`) VALUES ('$user_name','$book_name','$message')";
        $result=mysqli_query($connect,$query);
     
        if($result){
               echo $book_name;
            echo " : we are taked yours request";
           
        }
        else{
            echo " retry again";
        }
       /* mysqli_free_result($result);
        mysqli_close($connect);*/
     

    
   }

// ?>

<div class="w3-container">

<div class="w3-container">
    
</div>

<div class="w3-container w3-border" id="request">
        

    <form action="" method="POST">
           <h2>Place Order</h2>
           <p>      
                <label class="w3-text-blue"><b>User Name</b></label>
                <input class="w3-input w3-border" name="user_name" type="text" required></p>
           <p>      
           <p>      
                <label class="w3-text-blue"><b>Book Name</b></label>
                <input class="w3-input w3-border" name="book_name" type="text" required></p>
             <p>      
                <label class="w3-text-blue"><b>Message</b></label><br>
               <textarea style="width: 1232px" name="message" required></textarea>
           <p>  
                 <label class="w3-text-blue"><b>Current Date</b></label>
                        <?php  
                           echo $cdate;
                        ?>
                        
                    </p>
                         <p>      
               
                <input class="w3-btn w3-blue" type="submit" name="submit" value="Send Request">
         

    </form>




</form>
       
</div>


</table>
</div>
<?php

include 'includes/footer.php';
?>

