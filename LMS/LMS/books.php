<?php
/*session_start();

//if(isset($_POST['save']))

if(!isset($_SESSION['user_ID']))//if user is not login then can't access this page, go to login page
{
    header('location: login.php');
    exit;
}*/

if(isset($_POST['save']))
{
    $connection= mysqli_connect("localhost","root","","lms"); //built in function for connetion with database mysql.//1:Server name(localhost)//2:root usernmae//3:DB_Password("password empty)
 
   $Titles = $_POST['title'];
   $Descriptions = $_POST['description'];
   $Authors = $_POST['author'];
  
   //2nd steps: Insert Operation From CRUD
   $query= "INSERT INTO books(Title,Description,Author_name)
   VALUES('$Titles','$Descriptions','$Authors')";

   $query_result= mysqli_query($connection, $query);
   if($query_result)
   {
      echo "Yes data insertes successfully";
   }
   else{
      echo "Insertion fail";
   }
}
   
?>



<!DOCTYPE html>
<html>
    <head>
        <title>books</title>
        <style>
            #Main1{
                background-image:url("book1.jpg");
                background-position:center;
                background-size:cover;
                background-image:no-repeat;
                width:360px;
                height:250px;
                margin-left:450px;
                margin-top:-190px;
            }

        </style>
    </head>
    <body>
        <h1>Books Page</h1>

        <form action="books.php" method="POST">
        
       
       <div class="field-box">
       
       <input type="text" name="title" placeholder="Enter your Title" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);border-color:black;">
        </div>

       <br>

       <div class="field-box">
       <textarea type="text" name="description" placeholder="Enter your description" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);"></textarea>
        </div>
        <br>

        <div class="field-box">

      <label style="margin-left:150px;">Select Author</label>
      <select name="author" style="margin-left:5px;">
      // <?php
       

$connection= mysqli_connect("localhost","root","","lms");
$query="SELECT * FROM users where role= 'author' ";
$query_result= mysqli_query($connection, $query);
$authors_data=mysqli_fetch_all($query_result,MYSQLI_ASSOC);

foreach($authors_data as $author)
{
    echo "<option value={$author['Name']} >{$author['Name']}</option>";
}
          
          ?>

      </select>
</div>
 

<button type="submit" name="save" id="btn" style="margin-left:190px;margin-top:30px;width:90px;height:40px;border-radius:10px">Save</button>

<div id="Main1"></div>
    </body>
</html>