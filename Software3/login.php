<?php 
session_start();
?>
<html>

<?php

include 'database.php';

$a = $_POST['uname'];
$_SESSION['uname'] = $a;
$b = $_POST['pass'];

$sql = "SELECT * FROM users WHERE uname='$a' AND pwd='$b' ";

$result2 = mysqli_query($conn, $sql);

if(mysqli_num_rows($result2) > 0 )
{

    $row2 = mysqli_fetch_assoc($result2);
 
    $_SESSION['uid'] = $row2["uid"];

}
else
{
	echo "<script type='text/javascript'>alert('Sai');</script>";
}

$result = $conn->query($sql);    
if (!$row = $result->fetch_assoc()) {
	echo "<script type='text/javascript'>alert('Invalid login');</script>";
	header( "refresh:0;url=login.html" );
}
else{
	header("Location: main.php");

}

?>


</html>
