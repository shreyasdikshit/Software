<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
     body{
        background-image: url('http://i65.tinypic.com/332crup.jpg');
         background-size: cover;
     }
     .end{
            background-color:black;
            height:74px;
            text-align:center
            
      }
    </style>

  </head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
  <body>
    <!--Navigation bar-->

	<nav class="navbar navbar-inverse navbar-fixed-top" ><!--color-->
    <div class="container-fluid">
    <div class="navbar-header">
            <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target="#nvb">
                   <span class = "icon-bar"></span>
                   <span class = "icon-bar"></span>
                   <span class = "icon-bar"></span>
            </button>
      <a class="navbar-brand" href="index.html">
              <span style = "color:white"><span style = "color:red">S</span>outhern<span style = "color:red">S</span>picia</span>
          </a>

    </div>
          <div class = "collapse navbar-collapse" id = "nvb">
            <ul class="nav navbar-nav navbar-right" >
             <li style="font-family: comic sans ms;font-size: 20px;">
		<span style="color: white;">Welcome
		<?php 
			$conn = mysqli_connect('localhost', 'root', '', 'final');
			$sql = "select * from member";
			$rs = $conn->query($sql);
			while($row = $rs->fetch_assoc()){
				$a = $_SESSION['mob'];
				$b = $_SESSION['pass'];
				if($row['mobile'] == $a && $row['pwd'] == $b){
					echo $row['first'];
				}
			}
			
		?>
		&nbsp; 
		</span>
	     </li>
              <li style="font-family: comic sans ms;font-size: 20px;"><a href="logout.php"><span>LogOut</span></a></li>
              
              </li>
            </ul>
          </div>
    </div>
  </nav>
  <a href="http://tinypic.com?ref=264sxsx" target="_blank"><img src="http://i67.tinypic.com/264sxsx.png" border="0" alt="Image and video hosting by TinyPic" style="padding-top: 80px; padding-left: 350px;"></a>
  <a href="http://tinypic.com?ref=143446w" target="_blank"><img src="http://i63.tinypic.com/143446w.png" border="0" alt="Image and video hosting by TinyPic" style="padding-top: 0px; padding-left: 350px;"></a>
  <a href="http://tinypic.com?ref=25qgffl" target="_blank"><img src="http://i68.tinypic.com/25qgffl.png" border="0" alt="Image and video hosting by TinyPic" style="padding-top: 0px; padding-left: 350px;"></a>
  <a href="http://tinypic.com?ref=5md1tf" target="_blank"><img src="http://i63.tinypic.com/5md1tf.png" border="0" alt="Image and video hosting by TinyPic" style="padding-top: 0px; padding-left: 350px;"></a>

  <br><br>

</body>
</html>
