<?php
if(isset($_POST['save']))

{
    
    $Name=$_POST['Name'];
    $Password=$_POST['Password'];

    $connection= mysqli_connect("localhost","root","","lms");
  
    $query="SELECT * FROM users Where Name='$Name' AND Password='$Password'";
    $query_result=mysqli_query($connection,$query);
    // echo $query_result->num_rows;

    //when user login into website session/duration start

    if($query_result->num_rows > 0)
    {
        //header('location: dashboard.php');

        $data=mysqli_fetch_assoc($query_result);              //first  step data fetch
        session_start();                                      //2nd step session start
        $_SESSION['user_ID']=$data['ID'];                   //Made session varibale,password never store into sessions
        $_SESSION['user_Name']=$data['Name'];
        $_SESSION['user_Email']=$data['Email'];
        $_SESSION['user_Role']=$data['Role'];

//Data go to any website page on which user want to g give file path

        header('location: dashboard.php');
        exit;//mean after this next code not run

    }
    
}
    
    
   



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Submission</title>
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
               background-image:url("img2.png");
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
       
       <input type="text" name="Name" placeholder="Enter your Name" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);border-color:black;">
</div>

       <br>

       <div class="field-box">
       <input type="password" name="Password" placeholder="Enter your Password" style="margin-left:150px;margin-top:20px;background-color:rgb(227, 207, 156);">
</div>

<br>

       <button type="submit" name="save" id="btn" style="margin-left:190px;margin-top:30px;width:90px;height:40px;border-radius:10px">Save</button>


    </form>
        </div>
</body>
</html>
