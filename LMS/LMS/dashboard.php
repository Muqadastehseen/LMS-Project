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
        <title>dashboard</title>
        <style type="text/css">
            .menu{
                border:1px solid;

            }
            .menu li{
                display:inline-block;
                margin-left:20px;
            }
        </style>
    </head>
    <body>
      
        <h1>Welcome to our dashboard</h1>
        <ul class="menu">

        <li>
            <a href="home.php">Home</a>
        </li>

        <li>
            <a href="books.php">Books</a>
        </li>

        <li>
            <a href="students.php">Students</a>
        </li>


        <li>
            <a href="teachers.php">Teachers</a>
        </li>

        <li>
            <a href="logout.php">Log Out</a>
        </li>


        </ul>
        
    </body>

</html>
