<?php
session_start();
session_destroy();
header('location:http://localhost/hostel/s_login/login.php');
?>