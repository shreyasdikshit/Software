<?php 
session_start();
?>
<?php 

  include 'connectdb.php';

 ?>
<!DOCTYPE html>
<html lang="en">
  <title>Options</title>
  <body
    < style="background: url(img/mbg.jpg);">
            <div  align="center" style="padding-top: 100px; color:white">
            <h1>USE  </h1>
                 <form action="submit.php" method="POST">
                     <select id="func" name="func">
                        <option >Select Your Subject</option>
                        <?php 

                        $sql = "SELECT * FROM functions";
                        $result = $dbhandle->query($sql);
                        while($rs=$result->fetch_assoc()){
                          ?>
                        <option value="<?php echo $rs["fid"]; ?>"> <?php echo $rs["fname"]; ?> </option>
                      <?php
                        }
                        ?>
                      </select>
                      <br><br>
                    <input class="button" type="submit" value="Proceed"></input></a>
                  
                  </form>
            </div>
            <div  align="center" style="padding-top: 100px;color:white;">
            <h1>RELEASE  </h1>
                 <form action="release.php" method="POST">
                     <select id="func" name="func">
                        <option >Unselect Your Subject</option>
                        <?php 

                        $sql = "SELECT * FROM functions";
                        $result = $dbhandle->query($sql);
                        while($rs=$result->fetch_assoc()){
                          ?>
                        <option value="<?php echo $rs["fid"]; ?>"> <?php echo $rs["fname"]; ?> </option>
                      <?php
                        }
                        ?>
                      </select>
                      <br><br>
                    <input class="button" type="submit" value="Proceed"></input></a>
                  
                  </form>
                  <br><br><br>
                  <a href="logout.php"><button>LOG OUT</button></a>
            </div>


    <style type="text/css">
      #func{
         overflow:hidden;
         height: 40px;
         width:450px;
         -moz-border-radius: 9px 9px 9px 9px;
         -webkit-border-radius: 9px 9px 9px 9px;
         border-radius: 9px 9px 9px 9px;
         box-shadow: 1px 1px 11px #330033;
         font-family: comic sans ms;
         font-size: 25px;
         background: white ;

      }
    select option {

    }
    </style>
</body>
</html>
