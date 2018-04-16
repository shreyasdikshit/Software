<?php 
session_start();
?>
<html>

<?php

include 'database.php';

$a = $_POST['mob'];
$_SESSION['mob'] = $a; 
$b = $_POST['pass'];
$_SESSION['pass'] = $b;

$sql = "SELECT * FROM member WHERE mobile='$a' AND pwd='$b' ";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()) {
	echo "<script type='text/javascript'>alert('Invalid login');</script>";
	header( "refresh:0;url=login.html" );
}
else{
	header("Location: menu.php");

}

?>

</html>
