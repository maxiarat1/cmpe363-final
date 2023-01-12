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
<b>
<?php
session_start();
if(isset($_SESSION["name"])){
          session_unset();
      }
session_destroy();
?>
</b>
</body>


</html>