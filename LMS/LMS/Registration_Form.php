<?php
if(isset($_POST['save']))

{
       

    $errors=[];

    if($_POST['Name'] == '')
    {
       $errors['Name_errors']="Name field is empty"."<br>";
    }

    if($_POST['Email'] == '')
    {
       $errors['Email_errors']="Email field is empty"."<br>";
    }

    if($_POST['Password'] == '')
    {
       $errors['Password_errors']="Password field is empty"."<br>";
    }

    if($_POST['Gender'] == '')
    {
       $errors['Gender_errors']="Gender field is empty"."<br>";
    }

    if($_POST['Role'] == '')
    {
       $errors['Role_errors']="Role field is empty"."<br>";
    }


   
    if(empty($errors))
    {
       //Step 1:Form connetion//
       $Name=$_POST['Name'];
       $Email=$_POST['Email'];
       $Password=$_POST['Password'];
       $Gender=$_POST['Gender'];
       $Role=$_POST['Role'];
       
      
      $connection= mysqli_connect("localhost","root","","lms");
     
       //2nd steps: Insert Operation From CRUD
       $query="INSERT INTO 
       users(Name,Email,Password,Gender,Role,Status)
       VALUES('$Name','$Email','$Password','$Gender','$Role','active')";
 
       $query_result= mysqli_query($connection, $query);
       if($query_result)
       {
          echo "Yes data insertes successfully";
       }
       else{
          echo "Insertion fail";
       }
       
       

 


    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration_Form</title>
        <style>
              #Main{
                     background-color:pink;
                     width:1393px;
                     height:630px;

              }
            #Main3{
                width:450px;
                height:450px;
                background-color:white;
                margin-top:-500px;
                margin-left:530px;
                
            }
            #btn{
              background-color:pink;
              text:bold;
              font-size:15px;
            }
            #btn:hover{
              background-color:white;
            }
            
            #Main2{
            width:1050px;
            height:550px;
            background-color:white;
            margin-top:-590px;
            margin-left:170px;
            }
            #Main4{
               background-image:url("img1.jpg");
               background-size:cover;
               background-position:center;
               background image:no repeat;
                width:500px;
                height:450px;
                background-color:hsl(0, 0%, 90%);
                margin-top:-530px;
                margin-left:230px;
                
            }



        </style>
    </head>
    <body>
       <div id="Main"></div>
       <div id="Main2"></div>
       <div id="Main4">

       <div id="Main3">
              <h2 style="text-align:center;color:rgb(255, 116, 139);">Sign Up</h2>
              <h3 style="text-align:center;color:rgb(255, 116, 139);">Let's create your account</h3>
        <form action="" method="POST">
        <div class="field-box">
       
       <div class="field-box">
       
       <input type="text" name="Name" placeholder="Enter your Name" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);border-color:black;">
</div>

       <br>

       <div class="field-box">

       
       <input type="text" name="Email" placeholder="Enter your Email" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);">
</div>
<br>

       
       <div class="field-box">

       
       <input type="password" name="Password" placeholder="Enter your Password" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);">
</div>

<br>

<div class="field-box">

      <label style="margin-left:150px;">Select Gender</label>
      <select name="Gender" style="margin-left:5px;">
        <option value="male">Male</option>
        <option value="female">Female</option>

      </select>
</div>

<br>

<div class="field-box">

      <label style="margin-left:150px;">Select Role</label>
      <select name="Role"style="margin-left":5px;>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
        <option value="student">Student</option>
        <option value="author">Author</option>


      </select>
</div>

<br>








       <button type="submit" name="save" id="btn" style="margin-left:190px;margin-top:30px;width:90px;height:40px;border-radius:10px">Save</button>


    </form>
        </div>
</body>
</html>
