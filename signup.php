

<?php

    include_once 'header.php';
?>
<section class="signup">
	<div >
		<form action="database_conn/signup_dbh.php" method="POST">
             <input type="text" name="first" placeholder="first name">
             <input type="text" name="last" placeholder="last name">
             <input type="text" name="email" placeholder="e-mail">
             <input type="text" name="uid" placeholder="username">
             <input type="password" name="pwd" placeholder="password">
             <button type="submit" name ="submit">Sign up</button>
 



		</form>

	</div>




</section>
<?php

      include_once 'footer.php';
?>