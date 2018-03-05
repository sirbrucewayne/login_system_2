<?php
if(isset($_POST['submit'])){
       include_once 'dbh.php';
       $first = mysqli_real_escape_string($conn,$_POST['first']);
       $last = mysqli_real_escape_string($conn,$_POST['last']);
       $email = mysqli_real_escape_string($conn,$_POST['email']);
       $uid = mysqli_real_escape_string($conn,$_POST['uid']);
       $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);


       if(empty($first) || empty($last) || empty($email)  || empty($pwd)|| empty($uid) ){
       	     header("Location: ../signup.php?required fields are empty");
       	     exit();
       }
       else{
            if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
            	header("Location: ../signup.php?required fields are invalid");
       	     exit();
            }
            else{
            	if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            		header("Location: ../signup.php?email=invalid");
       	     exit();
            	}
            	else{
            		$sql="SELECT * FROM users WHERE user_uid ='$uid'";
            		$result = mysqli_query($conn,$sql);
            		$resultCheck = mysqli_num_rows($result);
            		if($resultCheck >= 1){
            			header("Location: ../signup.php?username_already_taken");
       	     exit();
            		}
            		else{
            			$hashPwd = password_hash($pwd,PASSWORD_DEFAULT);

            			$sql = "INSERT INTO users (first_name,last_name,user_email,user_uid,user_pwd) VALUES('$first','$last','$email','$uid','$hashPwd');" ;
            			mysqli_query($conn,$sql);
            			header("Location: ../signup.php?signup=success");
       	     exit();

            		}
            	}
            }




       }
}
else
{
	header("Location: ../signup.php");
	exit();
}