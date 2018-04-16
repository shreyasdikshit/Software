<?php

include 'database.php';

$a = $_POST['form-name'];
$b = $_POST['form-branch'];
$c = $_POST['form-id'];
$d = $_POST['form-year'];
$e = $_POST['form-bal'];

$sql = "INSERT INTO Account(Name,Branch,ID,Year,Balance) VALUES ('$a','$b','$c','$d','$e')";

$result = $conn->query($sql);
header("Location: print.php");
?>
