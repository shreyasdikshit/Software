<?php

include 'database.php';

$a = $_POST['uname'];
$b = $_POST['pass'];

$sql = "INSERT INTO users(uname,pwd) VALUES ('$a','$b')";

$result = $conn->query($sql);
header("Location: login.html");
?>