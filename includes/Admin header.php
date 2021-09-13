
 <?php
//   $nameee = $_POST['nameee'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.11.2-web/css/all.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/library.css">
</head>
<body>
   
 <div class="w3-brown w3-container" style="height: 100px">
     <h1 class="w3-center">LIBRARY MANAGEMENT SYSTEM</h1>
     <i class="fas fa-list w3-xxlarge" id="menubtn" onclick="showmenu()"></i>
     <a href="./index.html"><i class="fas fa-home w3-right w3-xxlarge"></i></a>
     <span class="w3-right" >
     <input type="search"><i class="fas fa-search w3-padding w3-xlarge"></i>
     </span>
     
     <?php
//  echo $nameee;
     ?>
    
 </div>


 <nav class="w3-sidenav w3-brown w3-card-2 " id="menu" style="width:20%">
  <br>
  <a href="admin add book.php" active>Add Book</a>
  <a href="">Remove Book</a>
  <a href="booklist.php">View Available Books</a>
  <a href="userlist.php">View User List</a>
  <a href="admin view issued books.php">View Issued Books</a>
  <a href="#">Update Book Details</a>
</nav>