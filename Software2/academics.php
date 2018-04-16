<?php
    include 'database.php';
    $res= mysqli_query($conn,"SELECT * FROM Academics");
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets_account/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets_account/css/simple-sidebar.css" rel="stylesheet">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets_login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets_login/css/form-elements.css">
    <link rel="stylesheet" href="assets_login/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-image: url(assets_account/img/acad.jpg)">


     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">SHREYAS DIKSHIT</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="personal.php">PERSONAL</a></li>
                    <li><a href="#">ACADEMIC</a></li>
                    <li><a href="extra.php">EXTRA-CURRICULAR </a></li>
                    <li><a href="contact.php">CONTACT ME</a></li>
                </ul>
            </div>

        </div>
    </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="row centered">
                <div class="form-box">
                    <div class="col-md-4 col-sm-offset-4">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h2 style="color:white; padding-left: 150px"><strong>Academics</strong></h2>
                            </div>
                        </div>
                        <div class="form-bottom">
                        <?php
                            while( $row= mysqli_fetch_assoc( $res ) ) {
                            echo "
                            <h4>School: {$row['School']}</h4>
                            <br>
                            <h4>Std. 10th Score: {$row['TScore']}</h4>
                            <br>
                            <h4>High School: {$row['HSchool']}</h4>
                            <br>
                            <h4>Std. 12th Score: {$row['TwScore']}</h4>
                            <br>
                            <h4>College: {$row['College']}</h4>
                            <br>
                            <h4>Degree: {$row['Degree']}</h4>
                            <br>
                            <h4>Current CGPA: {$row['CGPA']}</h4>";
                            }
                        ?>
                            <br>
                            <div class="row">
                                <div class="col-xs-5 col-sm-offset-5">
                                    <button type="submit" class="btn" onclick="location.href='updateacad.html';"><b>Edit</b></button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    mysqli_free_result($res);
    mysqli_close($conn);
?>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
	</html>