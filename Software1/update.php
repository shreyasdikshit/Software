<?php
include 'database.php';

$a = $_POST['form-id'];
$b = $_POST['form-branch'];
$c = $_POST['form-bal'];

$sql = "UPDATE Account SET Branch='$b', Balance='$c' WHERE id='$a' ";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Account added Successfully');</script>";
	header("Location: print.php");
}
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>