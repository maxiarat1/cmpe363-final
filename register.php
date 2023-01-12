<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8"/>
</head>
<style>
h1 {text-align: center;}
p {text-align: center;font-size: larger}
div {text-align: center;}

</style>
<body>
<?php
  session_start();
  include 'connect.php';
  if (isset($_POST['registerButton'])){ 
    $name = $_POST['name']; 
    $mail = $_POST['mail']; 
    $password = $_POST['password']; 
    $passwordrepeat = $_POST['passwordrepeat']; 
   
}
if ($name != "" && $password != "" && $passwordrepeat != ""){
  if ($password === $passwordrepeat){
    $query = mysqli_query($conn, "SELECT * FROM user WHERE name='{$name}'");
    if (mysqli_num_rows($query) == 0){
        // create and format some variables for the database
        $id = '';
        $name = $_POST['name']; 
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        mysqli_query($conn, "INSERT INTO user VALUES ('{$id}', '{$name}', '{$mail}', '{$password}')");
        $query = mysqli_query($conn, "SELECT * FROM user WHERE name='{$name}'");
        if (mysqli_num_rows($query) == 1){
          $error_msg = 'The username <i>'.$name.'</i> is registered successfully!';
        }
        else{
          $error_msg = 'Something happened.';
        }
    }
    else{
      $error_msg = 'The username <i>'.$name.'</i> is already taken. Please use another.';

    }
  }
  else{
    $error_msg = 'Your passwords did not match.';
  }
      
}
else{
  $error_msg = 'Please fill out all required fields.';
}
  
?>
<p>
    <?php
        echo $error_msg
    ?>
</p>
</body>


</html>