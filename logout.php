<?php
session_start();
// var_dump($_POST);

session_destroy();
 header("Location:index.php");
?>