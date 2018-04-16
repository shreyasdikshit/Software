<?php
include 'database.php';

$a = $_POST['form-num'];
$b = $_POST['form-em'];

$sql = "UPDATE Contact SET Number='$a', Email='$b' ";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
	header("Location: contact.php");
}
else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>