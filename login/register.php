<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    //SOMETHING WAS POSTED
    if(isset($_POST['signUp']))
    {
    $firstname=$_POST['fName'];
    $lastname=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail="select * from users where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0)
    {
        echo "Email already exists !!!";
    }
    else{

        if(!empty($email)&& !empty($password) && !empty($firstname))
        {
            //save to database
            $query="insert into users (firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
            
            mysqli_query($conn,$query);
    
            header('Location:index.php');
            die;
        }
        
        else
        {
                echo "please enter some valid information"; 
          }

    }

    }
   
}

?>


