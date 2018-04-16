<?php
	include 'database.php';
	$res= mysqli_query($conn,"SELECT * FROM personal");
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
<body style="background-image: url(assets_account/img/ad.jpg)">


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
                    <li><a href="#">PERSONAL</a></li>
                    <li><a href="academics.php">ACADEMIC</a></li>
                    <li><a href="extra.php">EXTRA-CURRICULAR </a></li>
                    <li><a href="contact.php">CONTACT ME</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="row main-low-margin text-center">
        <div class="col-md-6 ">
        <br><br><br>
            <img class="img-circle" src="assets/img/team/shreyas.jpg" alt="">
                <h4><strong>Shreyas Dikshit</strong> </h4>
                <p>
                    BT15CSE082 
                </p>
                 <p>
                     <a href="https://www.facebook.com/shreyas.dikshit.3"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                </p>
        </div>
    </div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="row centered">
                <div class="form-box">
                    <div class="col-md-4 col-sm-offset-2">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h2 style="color:white; padding-left: 180px"><strong>About Me</strong></h2>
                            </div>
                        </div>
                        <div class="form-top">
                        <?php
                            while( $row= mysqli_fetch_assoc( $res ) ) {
                            echo "
                            <h4>Name: {$row['Name']}</h4>
                            <br>
                            <h4>Age: {$row['Age']}</h4>
                            <br>
                            <h4>City: {$row['City']}</h4>
                            <br>
                            <h4>Interests: {$row['Interests']}</h4>";
                            }
                        ?>
                        <br>
                        <div class="row">
                            <div class="col-xs-5 col-sm-offset-5">
                                <button type="submit" class="btn" onclick="location.href='updatepers.html';"><b>Edit</b></button>
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

    </div>
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