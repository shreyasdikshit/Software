<?php
$conn = mysqli_connect('localhost', 'root', '', 'ClientServer');
if(!$conn)
{
	die("connection failed".mysqli_connect_error());
}
?>
