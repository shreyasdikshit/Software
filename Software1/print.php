<?php
include 'database.php';

$sql="SELECT * FROM Account";
$fetch = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body style="background-image: url(assets_login/img/pbg.jpg)">
<br><br><br><br><br><br><br><br><br>
<table style="width:100%">
  <tr style="color:white">
    <th>Name</th>
    <th>Branch</th> 
    <th>ID</th> 
    <th>Year</th>
    <th>Balance</th>
  </tr>
  <?php while($row = mysqli_fetch_array($fetch)) {
            echo  "<tr>
               <td>".$row['Name']."</td>
               <td>".$row['Branch']."</td>
               <td>".$row['ID']."</td>
               <td>".$row['Year']."</td>
               <td>".$row['Balance']."</td>
            </tr>"; 
   }
?>
</table>
<br><br><br><br><br>
<div class="button">
      <a style="color: white;" href="page.html">Return</a>
   
</div>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: center;
    padding: 8px;
    color:white;
}

th {
    background-color: #002080;
    color: white;
}
  .button {
    background-color: #002080;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</body>
</html>