<?php

include 'database.php';

$a = $_POST['form-id'];

$sql = "DELETE FROM Account WHERE (id='$a')";

$result = $conn->query($sql);
echo "<script type='text/javascript'>alert('Account deleted successfully!!');</script>";
header("Location: print.php");
?>

