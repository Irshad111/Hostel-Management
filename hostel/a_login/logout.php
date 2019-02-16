<?php
session_start();
session_destroy();
header('location:http://localhost/hostel/a_login/login.php');
?>