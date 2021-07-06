<?php
session_start();
// var_dump($_POST);

if (isset($_POST['login'])) {

  if($_POST['password']!='Finx1234'){
    $_SESSION['user_login']="false";
    header("Location:index.php");
  }else{
    $_SESSION['user_login']="true";
  }
}
if (!isset($_SESSION['user_login'])) {
 header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FINX</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  <!-- Favicons -->
  <link href="./images/favicon-48x48.png" rel="icon">
  <link href="./images/favicon-48x48.png" rel="apple-touch-icon">
<style>a.namelogut {
    margin-right: 15px;
    margin-top: 15px;
    color: #1b81c1;
}</style>
</head>
<body>

    <div style="background-color: white;">
        <a href="index.php"> <img style="width: 280px; height: 50px; margin-left: 30px; margin-top: 5px; padding: 10px;" src="./images/Finx_logo.png" alt="finex_logo"></a>
        <a href="logout.php" style="float: right;" class="namelogut">Logout</a>
    </div>    
      



    <div class="container " style="text-align: center;">  
    <div class="videobox">
	<video class="responsive-iframe"  width="640" height="360"  autoplay="autoplay" loop controls >
        <source src="video.mp4">
        <source src="video.mp4">
        
</video>
	</div>
</div>

</body>
</html>
