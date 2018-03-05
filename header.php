<?php
   session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		
         <link rel="stylesheet" href="styling.css">

          <style type="text/css">
          	body{
          		/*background-image: url("https://i.ytimg.com/vi/j9on9n4YHII/maxresdefault.jpg");*/
          		background-image:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSb-KtyiiUDljX0h4c3CM5Y67JS21hdTPos4n8wclyIKsR4wxRY5g");
          	}
          </style>


	</head>
	<body>
		<header>
			<nav>
				<div class ="style1">
				<div class="login">
					<form action="database_conn/login.php"  method="POST">
						<input type="text" name="uid" placeholder="username/email">
						<input type="password" name="pwd" placeholder="password">
						<button type ="submit" name="login">login</button>
                    </form>
                    <a href="signup.php">sign up</a>
				</div>
             </div>
			</nav>
		</header>