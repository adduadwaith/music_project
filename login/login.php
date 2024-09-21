<?php

use LDAP\Result;

session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    //SOMETHING WAS POSTED
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);


    if(!empty($email)&& !empty($password))
    {
        //read from the database
        
        $query="select * from users where email='$email' and password='$password' limit 1";
        
        $result=mysqli_query($conn,$query);

        if($result)
        {

            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password']=== $password)
                {
                    $_SESSION['email']=$user_data['email'];
                    header('Location:homepage1.php');
                    die;
                }
            }

        }
        echo "wrong email or password"; 
      
    }
    else{
        echo "please enter some valid information"; 
    }
}

?>


