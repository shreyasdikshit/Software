<?php
include 'database.php';

$a = $_POST['form-age'];
$b = $_POST['form-city'];
$c = $_POST['form-int'];

$sql = "UPDATE personal SET Age='$a', City='$b' , Interests='$c' ";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
	header("Location: personal.php");
}
else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>