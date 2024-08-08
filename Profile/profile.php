<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "filmeto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = mysql_query("select id from users where username ='".$_SESSION['username']."'");
$row = mysql_fetch_array($result);
$id = $row['id'];
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Filmeto</title>
    <link rel="icon" type="image/x-icon" href="2.png">
    <link rel="stylesheet" href="style.css">
</head>
<style>
  body {
    background-image: url('1.jpg');
  }
  </style>
<div class="wrapper">
    <div class="left">
        <img src="5.png" alt="user" width="100">
        <h4>
        <?php echo $id?>

        </h4>
    </div>
    <div class="right">
        <div class="info">
            <h3>Your Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Your Email</h4>
                    <p><?php
                        echo $_SESSION['$email'];
                        ?></p>
                     </>
                 </div>
                 <div class="data">
<!--                   <h4>Password</h4>-->
<!--                    <p>-->
<!--                        --><?php
//                        echo $_SESSION['beforeHash'];
//                        ?><!--</p>-->
              </div>
            </div>
        </div>
              </div>
            </div>
          </div>
          <a href="../new/userprofile.php"> <button class="redirect" type="button">Click Here To Back To Home
                  Page</button></a>
      </div>
        </div>
      
      </div>
    </div>
</div>
</html>