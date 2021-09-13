<?php
include 'includes/connect.php';
include 'includes/Admin header.php';


$sql="SELECT * FROM request";
$records=mysqli_query($connect,$sql);


?>
<div class="w3-container">
<table class="w3-table-all">
    <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Book Name</th>
        <th>Issued Date</th>
        <th>Return Date</th>
        <th>Fine</th>
        

    </tr>

    <?php
 while($book=mysqli_fetch_assoc($records)){
     
 echo "<tr>";
 echo "<td>".$book['id']."</td>";
 echo "<td>".$book['username']."</td>";
 echo "<td>".$book['bkName']."</td>";
 echo "<td>".$book['currentDate']."</td>";
 echo "<td>".$book['ReturnDate']."</td>";
 echo "<td>".$book['cost']."</td>";

echo "</tr>";
 }
    ?>

</table>
</div>

<?php

include 'includes/footer.php';
?>
