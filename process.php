 <?php  
session_start();
include 'includes/connect.php';

    
   if(isset($_GET['delete'])){
    $idd=$_GET['delete'];

    $query="DELETE FROM `books` WHERE `book_id`= $idd";

      $request= mysqli_query($connect,$query);
      if($request)   { echo "Deleted successfully";
    }
    else{
        echo "book does not exist";
    }
   }
   
   $id="";
   $name='';
   $authour='';
   $authour='';
   $cover="";

$_SESSION['username']=$name;

   if(isset($_GET['update'])){
    $id=$_GET['update'];
    $query = "SELECT * FROM `books` WHERE `book_id`=$id";
    $request= mysqli_query($connect,$query);
    $row = mysqli_fetch_array($request);
    $id = $row['book_id'];
    $name = $row['name'];
    $authour = $row['authour'];
    $price = $row['fine'];
    $cover = $row['cover_page'];
     //
   }

   if(isset($_POST['updated'])){

         
    $id =$_POST['bkid'];
    $name=$_POST['name'];
    $authour=$_POST['authour'];
    $price=$_POST['price'];
    $cover=$_POST['coverpage'];
    
      
        $query="UPDATE `books` SET `name`='$name',`authour`='$authour',`fine`='$price',`cover_page`='$cover' WHERE `book_id`=$id";
        $result=mysqli_query($connect,$query);
       
       
        if($result){
               echo $name;
            echo "  has been updated";
            header("location:booklist.php");
           
        }
        else{
            echo "not updated";
        }


        

   }


  //  if(isset($_GET['request'])){
  //   $id=$_GET['request'];
  //   $sql="INSERT INTO request (book_id,'user_id',current_date,return_date,fine) 
  //   SELECT `book_id`,`user_id`,'','' FROM books,user WHERE `book_id`=3 AND 'user_id'=1";

  //   $records=mysqli_query($connect,$sql);
  //  }


   if(isset($_POST['submit'])){
     
 $name = $_POST['username'];
$password = $_POST['pass'];

// $username = stripcslashes($username);
// $password = stripcslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);
  
$sql="SELECT * FROM `user` WHERE `name`='$name' and `password`='$password'";
$result = mysqli_query($connect,$sql);

//die("failed to query data");

    $row = mysqli_fetch_array($result);
    if($row['name']==$name && $row['password']==$password){
        header("location: user.php");
    }
    else{
        echo " login fail ";
    }
   }

   if(isset($_POST['adminsubmit'])){
     
    $name = $_POST['username'];
    $password = $_POST['pass'];
    
    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
    // $username = mysql_real_escape_string($username);
    // $password = mysql_real_escape_string($password);
      
    $sql="SELECT * FROM `user` WHERE `name`='$name' and `password`='$password'";
    $result = mysqli_query($connect,$sql);
    
    //die("failed to query data");
    
        $row = mysqli_fetch_array($result);
        if($row['name']==$name && $row['password']==$password){
            header("location: admin.php");
        }
        else{
            echo " login fail ";
        }
       }

if(isset($_GET['request'])){
  $userid=1;
  $requestid=$_GET['request'];
  echo "succesfull not yet";
  $sql="INSERT INTO request (`user_id`,`book_id`) 
  SELECT `user_id`,`book_id` FROM user,books WHERE `user_id`=$userid AND `book_id`=$requestid";
  
      
      $records=mysqli_query($connect,$sql);
  
      if($records){
          echo "succesfull";

      }
      else{
          echo "failed";
      }
  }
  


?>