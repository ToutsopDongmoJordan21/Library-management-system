<?php
include 'includes/connect.php';
$sql="SELECT * FROM books";
$records=mysqli_query($connect,$sql);

include("includes/Admin header.php");
while($book=mysqli_fetch_assoc($records)){
     
//     echo "<tr>";
//     echo "<td>".$book['book_id']."</td>";
//     echo "<td>""</td>";
//     echo "<td>""</td>";
//     echo "<td>".$book['fine']."frs</td>";
//     echo "<td>";
   
//     echo ' <span><img src="''" alt="" srcset="" width="50px" hieght="50px" ></span> ';
//    //  echo ")'></span>";
   
//     echo "</td>";
   
//    "</tr>";
    
    echo '<div class="w3-row-padding w3-margin-top">';
    echo  '<div class="w3-third">';
    echo   '<div class="w3-card-16" style="width:70%">';
    echo      '<img src="images/'.$book['cover_page'].'" class="w3-image"  alt="">';  
    echo    '<div class="w3-container">';    
    echo     '<h4> <i>Name </i>:<b>'.$book['name'].'</b></h4>'; 
    echo     '<h4> <i>Authour</i>:<b>'.$book['authour'].'</b></h4>';     
       echo     '</div>
        </div>
      
    </div>

</div>';
}
?>

   
</body>
</html>