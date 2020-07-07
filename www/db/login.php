
<?php
require_once('conn.php');
global $conn;
    

if(isset($_POST['submit']))
{
$username = trim($_POST['email']);
$password = md5(trim($_POST['password']));
$query = "SELECT * FROM users WHERE email='$username' 
AND password='$password'";
echo $query;
echo $result = mysqli_query($conn,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['userid']=$row['id'];
 header("location: ../home.php");
  }
  else
     {
        header("Location: ../index.php");
  }
 }

 ?>  