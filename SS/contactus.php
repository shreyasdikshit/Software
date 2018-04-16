<?php

include 'database.php';

$a = $_POST['fname'];
$b = $_POST['lname'];
$c = $_POST['state'];
$d = $_POST['email'];
$e = $_POST['msg'];

$sql = "INSERT INTO contact(first,last,state,email,msg) VALUES ('$a','$b','$c','$d','$e')";

$result = $conn->query($sql);
header("Location: contact.html");
?>