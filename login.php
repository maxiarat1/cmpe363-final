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
<div>

</div class=center-screen>
<b>
<?php

session_start();
  include 'connect.php';
  if(isset($_SESSION["user"])){
			session_unset();
		}
  if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        

        

    }else if(empty($pass)){

        

        

    }else{

        $sql = "SELECT * FROM user WHERE mail='$email'  ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['mail'] === $email && $row['password'] === $pass) {

               

                $_SESSION['mail'] = $row['mail'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                

               

            }else{

                $message = "Incorect User name or password";
				echo "<script type='text/javascript'>alert('$message');
				
				</script>";
               

            }

        }else{
			$message = "Incorect User name or password";
			echo "<script type='text/javascript'>alert('$message');
			
			</script>";	
            

        }

    }

}else{ 

}


?>


</body>


</html>