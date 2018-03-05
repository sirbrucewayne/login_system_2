<?php
 session_start();
if(isset( $_POST['login'])){
       include 'dbh.php';
       $uid = mysqli_real_escape_string($conn,$_POST['uid']);
       $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
        
        if(empty($uid)  || empty($pwd))
        {
        	header("Location: ../start.php?login=empty");
    	    exit();
        }
        else{
               $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$email'";
               $result = mysqli_query($conn,$sql);
               $resultCheck=mysqli_num_rows($result);
               if($resultCheck < 1){
               	header("Location: ../start.php?login=error");
               	exit();
               }else{
               	    if($row = mysqli_fetch_assoc($result)){
               	    	   $hashPwdCheck = password_verify($pwd,$row['user_pwd']);
               	    	   if(hashPwdCheck == false){
               	    	   	header("Location: ../start.php?login=error");
               	exit();
               	    	   }
               	    	   elseif($hashPwdCheck==true){
                              $_SESSION['u_id'] = $row['user_id'];
                              $_SESSION['u_first'] = $row['first_name'];
                              $_SESSION['u_last'] = $row['last_name'];
                              $_SESSION['u_email'] = $row['user_email'];
                              $_SESSION['u_uid'] = $row['user_uid'];
                             	header("Location: ../notes.php?login=success");
               	exit();
               	    	   }
               	    }
               }
        }



    }
    else{
    	header("Location: ../start.php?login=error");
    	exit();
    }
