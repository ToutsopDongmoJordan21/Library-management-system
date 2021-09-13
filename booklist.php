<?php

include 'includes/connect.php';
include 'includes/Admin header.php';
include 'process.php';

$sql="SELECT * FROM books";
$records=mysqli_query($connect,$sql);




    
   if(isset($_POST['remove'])){
       
$idd=$_POST['remov'];
    $query="DELETE FROM `books` WHERE `book_id`= $idd";

      $request= mysqli_query($connect,$query);
      if($request)   {
        echo "Deleted successfully";
    }
    else{
        echo "book does not exist";
    }
   }


?>

<div class="w3-container">

<div class="w3-container">
<input type="button" value="REMOVE" onclick="document.getElementById('removediv').style.display='block'" class="w3-btn w3-white w3-border w3-round-large w3-right">
     <button class="w3-btn w3-white w3-border w3-round-large w3-right"><a href="updatebook.php">UPDATE</a></button>
     <button class="w3-btn w3-white w3-border w3-round-large w3-right"><a href="admin add book.php">ADD BOOK</a></button>
     <button class="w3-btn w3-white w3-border w3-round-large w3-right"><a href="gallery.php">VIEW AS BLOCK</a></button>

     <!-- <input type="button" value="UPDATE"  class="w3-btn w3-white w3-border w3-round-large w3-right">  -->
   
    
</div>
<?php

  
?>



<div class="w3-container w3-border w3-red " id="removediv">
        <h3 class="w3-center">Enter the ID of the book you want to remove</h3>
        
<form action="" method="post">
<input type="submit" value="Remove" class="w3-right w3-btn w3-white w3-border w3-round-large" name="remove"> 
        <input type="number" class="w3-right w3-black" name="remov">
</form>
       
</div>

<table class="w3-table-all">
    <tr>
        <th>ID</th>
        <th>Book Name</th>
        <th>Author</th>

        <th>Price</th>
        <th>Cover page</th>
        <th>Update / Delete </th>

    </tr>

    <?php
 while($book=mysqli_fetch_assoc($records)){
     
 echo "<tr>";
 echo "<td>".$book['book_id']."</td>";
 echo "<td>".$book['name']."</td>";
 echo "<td>".$book['authour']."</td>";
 echo "<td>".$book['fine']."frs</td>";
 echo "<td>";

 echo ' <span><img src="images/'.$book['cover_page'].'" alt="" srcset="" width="50px" hieght="50px" ></span> ';
//  echo ")'></span>";

 echo "</td>";
 ?>
 <td>
 <button href="#update">
 <i class="fas fa-retweet w3-xlarge w3-padding "><a href="updatebook.php?update=<?php echo $book['book_id']; ?>">update</a></i>
</button>
<button>
 <i class="fas fa-trash w3-xlarge w3-padding "><a href="booklist.php?delete=<?php  echo $book['book_id']; ?>">delete</a></i>
</button>
</td>;
<?php
echo "</tr>";
 }
    ?>

</table>

</div>
<!-- 

<div class="w3-container" id="update">
            <form class="w3-container w3-card-4" action="process.php" method="POST">
                <h2 class="w3-text-blue">UPDATE BOOK INFORMATION</h2>
                <p>Fill in the fields below </p>

                <p>      
                <label class="w3-text-blue"><b>Book ID</b></label>
                <input class="w3-input w3-border" name="bkid" type="number" value="<?//php echo $id ?>" placeholder="<?php echo $id ?>"></p>
                <p>      
                <label class="w3-text-blue"><b>Book Name</b></label>
                <input class="w3-input w3-border" value="<?//php echo $name ?>" name="name" type="text"></p>
                <p>      
                        <label class="w3-text-blue"><b>Authour</b></label>
                        <input class="w3-input w3-border" value="<?php //echo $authour ?>" name="authour" type="text"></p>
                         <p>      
                <label class="w3-text-blue"><b>Price</b></label>
                <input class="w3-input w3-border" name="price" value="<?//php echo $price ?>"  type="text"></p>
                <p>      
                <label class="w3-text-blue"><b>Select Cover Page</b></label>
                <input class="w3-input w3-border" value="<?//php echo $cover ?>" name="coverpage" type="file"></p>
                
               
                <input class="w3-btn w3-blue" type="submit" name="update" value="UPDATE">
              </form>
    </div> -->

<?php

include 'includes/footer.php';
?>

