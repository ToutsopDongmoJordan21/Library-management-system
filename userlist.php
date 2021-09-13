<?php

include 'includes/connect.php';
include 'includes/Admin header.php';

$sql="SELECT * FROM `user`";
$records=mysqli_query($connect,$sql);
?>

<div class="w3-container">
<table class="w3-table-all w3-hoverable">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Telephone</th>

        <th>email</th>
        <th>address</th>

    </tr>

    <?php
 while($user=mysqli_fetch_assoc($records)){
     
 echo "<tr>";
 echo "<td>".$user['userId']."</td>";
 echo "<td>".$user['userName']."</td>";
 echo "<td>".$user['tel']."</td>";
 echo "<td>".$user['email']."</td>";
 echo "<td>".$user['address']."</td>";
 

echo "</tr>";

 }
    ?>

</table>
</div>
<?php

include 'includes/footer.php';
?>

