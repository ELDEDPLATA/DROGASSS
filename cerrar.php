<?php 

session_start();
session_destroy();
header("location: ../adiccion/login.html");

?>