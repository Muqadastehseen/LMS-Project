<?php
session_start();

//if(isset($_POST['save']))

if(!isset($_SESSION['user_ID']))//if user is not login then can't access this page, go to login page
{
    header('location: login.php');
    exit;
}
?>





<!DOCTYPE html>
<html>
    <head>
        <title>students</title>
        <style>

        </style>
    </head>
    <body>
    <h1>Students Page</h1>


    </body>
</html>