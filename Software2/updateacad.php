<?php
include 'database.php';

$a = $_POST['form-col'];
$b = $_POST['form-deg'];
$c = $_POST['form-cg'];

$sql = "UPDATE Academics SET College='$a', Degree='$b' , CGPA='$c' ";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
	header("Location: academics.php");
}
else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>