<?php
include "connect.php"
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>CMPE363-Final</title>
  </head>
  <body>
    <?php
      session_start();
    ?>

    Is this working?
  <div class="buttons">
    <button id="register-button" onclick="window.location.href='Register.html'" class="register-btn">Register</button>
    <button id="login-button" onclick="window.location.href='Login.html'" class="login-btn">Login</button>
    <button id="logout-button" class="login-btn"  onclick="window.location.href='logout.php'">Log Out</button>
  </div>

    <!--Login and register-->
    <?php
     function is_logged_in() {
      // check if the user is logged in by checking for a session variable
      if (isset($_SESSION['name']) && $_SESSION['name'] == true) {
        return true;
      } else {
        return false;
      }
    }
    if (is_logged_in()) {
      // hide the buttons
      echo '<style> #login-button, #register-button, #submit-button { display: none; } </style>';
    }
    else{ 
      echo '<style> #login-button, #register-button </style>';
      echo '<style> #submit-button { display: none; } </style>';
      echo '<style> #logout-button { display: none; } </style>';
    }
  ?>
<!--display user name -->
<?php
		if(isset($_SESSION["name"])){
		 echo $_SESSION["name"];

		}
		else{
			echo "Not logged in.";
		}
    

	?>
    
    
    <!--Example qeury 
        sqlsrv_query($conn,"INSERT INTO Users (Personid, Username, Userpassword) 
        VALUES ('$_POST[Username]','$_POST[Userpassword]')");
    
        '$_POST[Personid]' is incremented automatically
      -->
  </body>
</html>
