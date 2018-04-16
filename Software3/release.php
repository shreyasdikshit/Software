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
    if($rs['uid']==$b)
    {
    	$sql3 = "UPDATE functions SET availability=1,uid=NULL WHERE fid= 1 ";

		if ($conn->query($sql3) === FALSE) {
	    	echo "<script type='text/javascript'>alert('Error here..');</script>";
			//header( "refresh:0;url=curryhouse.html" );
	    }
		echo "<script type='text/javascript'>alert('You unselected English');</script>";
        header( "refresh:0;url=main.php" );

    }
    else
    {
    	echo "<script type='text/javascript'>alert('English is not selected');</script>";
        header( "refresh:0;url=main.php" );
    }
}
else if($a == 2)
{
	$sql = "SELECT * FROM functions WHERE fid=2";
    $result = $conn->query($sql);
    $rs=$result->fetch_assoc();
    if($rs['uid']==$b)
    {
        $sql3 = "UPDATE functions SET availability=1,uid=NULL WHERE fid= 2 ";

        if ($conn->query($sql3) === FALSE) {
            echo "<script type='text/javascript'>alert('Error here..');</script>";
            //header( "refresh:0;url=curryhouse.html" );
        }
        echo "<script type='text/javascript'>alert('You unselected Maths');</script>";
        header( "refresh:0;url=main.php" );

    }
    else
    {
        echo "<script type='text/javascript'>alert('Maths is not selected');</script>";
        header( "refresh:0;url=main.php" );
    }
}
else if($a == 3)
{
	$sql = "SELECT * FROM functions WHERE fid=3";
    $result = $conn->query($sql);
    $rs=$result->fetch_assoc();
    if($rs['uid']==$b)
    {
        $sql3 = "UPDATE functions SET availability=1,uid=NULL WHERE fid= 3 ";

        if ($conn->query($sql3) === FALSE) {
            echo "<script type='text/javascript'>alert('Error here..');</script>";
            //header( "refresh:0;url=curryhouse.html" );
        }
        echo "<script type='text/javascript'>alert('You unselected Physics');</script>";
        header( "refresh:0;url=main.php" );

    }
    else
    {
        echo "<script type='text/javascript'>alert('Physics is not selected');</script>";
        header( "refresh:0;url=main.php" );
    }
}
else if($a == 4)
{
	$sql = "SELECT * FROM functions WHERE fid=4";
    $result = $conn->query($sql);
    $rs=$result->fetch_assoc();
    if($rs['uid']==$b)
    {
        $sql3 = "UPDATE functions SET availability=1,uid=NULL WHERE fid= 4 ";

        if ($conn->query($sql3) === FALSE) {
            echo "<script type='text/javascript'>alert('Error here..');</script>";
            //header( "refresh:0;url=curryhouse.html" );
        }
        echo "<script type='text/javascript'>alert('You unselected Chemistry');</script>";
        header( "refresh:0;url=main.php" );

    }
    else
    {
        echo "<script type='text/javascript'>alert('Chemistry is not selected');</script>";
        header( "refresh:0;url=main.php" );
    }
}
else{
	echo "<script type='text/javascript'>alert('Page under construction..');</script>";
	
}


?>