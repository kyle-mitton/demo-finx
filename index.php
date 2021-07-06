<?php
session_start();

if (isset($_SESSION['user_login'])) {
  if ($_SESSION['user_login']=="true") {
    header("location:video.php");
  }
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
<style>
input.formcontrolbox {
    background: #fff;
    padding: 6px 12px;
    border: 0px;
    width: 100%;
    height: 55px;
    border: 2px solid #0D47A1;
}</style>
</head>
<body>

    <!-- <div style="width: 150px; height: 70px; margin-left: 30px; margin-top: 20px;">
        <a href="index.html"> <img src="./images/logo.svg" alt="finex_logo"></a>
    </div> -->
    <div style="background-color: white;">
        <a href="index.php"> <img style="width: 280px; height: 50px; margin-left: 30px; margin-top: 5px; padding: 10px;" src="./images/Finx_logo.png" alt="finex_logo"></a>
    </div>
    <br><br>
    <div class="form">
        <div class="form-content">
            <form action="video.php" method="post">
                <div class="form-info">
                    <h2 style="text-align: center;">Welcome</h2>
                </div>                
                <div class="pass">			
               <!-- <span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>-->
                    <input class="formcontrolbox" type="password" name="password" placeholder="Enter Password" required="">
                </div>                
                <div class="submit-agileits">
                    <input class="login" type="submit" name="login" value="login">
                </div>
            </form>
        </div>
    </div>


</body>
</html>
