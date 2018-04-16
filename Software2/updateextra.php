<?php
include 'database.php';

$a = $_POST['form-cult'];
$b = $_POST['form-sp'];
$c = $_POST['form-oth'];

$sql = "UPDATE Extra SET Cultural='$a', Sports='$b' , Others='$c' ";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
	header("Location: extra.php");
}
else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>