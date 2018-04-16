<?php
$conn = mysqli_connect('localhost', 'root', '', 'Bank');
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
?>
