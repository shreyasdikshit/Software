<?php 
session_start();
?>
<?php

include 'database.php';

$a = $_POST["func"];
$b = $_SESSION['uid'];

if($a == 1)
{
	$sql = "SELECT * FROM functions WHERE fid=1";
	$result = $conn->query($sql);
    $rs=$result->fetch_assoc();
    if($rs['availability']==1)
    {
    	$sql3 = "UPDATE functions SET availability=0,uid=$b WHERE fid= 1 ";

		if ($conn->query($sql3) === FALSE) {
	    	echo "<script type='text/javascript'>alert('Error here..');</script>";
			//header( "refresh:0;url=curryhouse.html" );
	    }
		echo "<script type='text/javascript'>alert('You have now selected English');</script>";
		header( "refresh:0;url=main.php" );

    }
    else
    {
    	echo "<script type='text/javascript'>alert('English is already selected');</script>";
    	header( "refresh:0;url=main.php" );
    }
}
else if($a == 2)
{
	$sql = "SELECT * FROM functions WHERE fid=2";
	$result = $conn->query($sql);
    $rs=$result->fetch_assoc();
    if($rs['availability']==1)
    {
    	$sql3 = "UPDATE functions SET availability=0,uid=$b WHERE fid= 2 ";

		if ($conn->query($sql3) === FALSE) {
	    	echo "<script type='text/javascript'>alert('Error here..');</script>";
			//header( "refresh:0;url=curryhouse.html" );
	    }
		echo "<script type='text/javascript'>alert('You have now selected Maths');</script>";
		header( "refresh:0;url=main.php" );

    }
    else
    {
    	echo "<script type='text/javascript'>alert('Maths is already selected');</script>";
    	header( "refresh:0;url=main.php" );
    }
}
else if($a == 3)
{
	$sql = "SELECT * FROM functions WHERE fid=3";
	$result = $conn->query($sql);
    $rs=$result->fetch_assoc();
    if($rs['availability']==1)
    {
    	$sql3 = "UPDATE functions SET availability=0,uid=$b WHERE fid= 3 ";

		if ($conn->query($sql3) === FALSE) {
	    	echo "<script type='text/javascript'>alert('Error here..');</script>";
			//header( "refresh:0;url=curryhouse.html" );
	    }
		echo "<script type='text/javascript'>alert('You have now selected Physics');</script>";
		header( "refresh:0;url=main.php" );

    }
    else
    {
    	echo "<script type='text/javascript'>alert('Physics is already selected');</script>";
    	header( "refresh:0;url=main.php" );
    }
}
else if($a == 4)
{
	$sql = "SELECT * FROM functions WHERE fid=4";
	$result = $conn->query($sql);
    $rs=$result->fetch_assoc();
    if($rs['availability']==1)
    {
    	$sql3 = "UPDATE functions SET availability=0,uid=$b WHERE fid= 4";

		if ($conn->query($sql3) === FALSE) {
	    	echo "<script type='text/javascript'>alert('Error here..');</script>";
			//header( "refresh:0;url=curryhouse.html" );
	    }
		echo "<script type='text/javascript'>alert('You have now selected Chemistry');</script>";
		header( "refresh:0;url=main.php" );

    }
    else
    {
    	echo "<script type='text/javascript'>alert('Chemistry is already selected');</script>";
    	header( "refresh:0;url=main.php" );
    }
}
else{
	echo "<script type='text/javascript'>alert('Page under construction..');</script>";
	header( "refresh:0;url=main.php" );
	
}


?>