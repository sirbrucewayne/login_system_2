
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="styling.css">
	<style type="text/css">
		body{
			background-image: url("https://previews.123rf.com/images/yarlander/yarlander1508/yarlander150800031/43590461-Rustic-aged-grey-wooden-table-top-view-Wooden-background-Stock-Photo.jpg");
		}


	</style>
</head>
<body>
      <section>
      	<form action="database_conn/notes_dbh.php" method="POST">
      		<div class="style3" ><textarea  type="text" rows="40" cols="200" name="Note"></textarea></div>
      		<div class="style4">
      		      <button type="submit" name="note" >SAVE</button>
      		</div>      
      		<div class="style5">      
      		      <button type="submit" name="view" >VIEW</button>
      		</div>      
      	</form>
        <form action="start.php" method="POST">
        	<div class="style6">
        		<button type="submit" name="logout">Logout</button>
        	</div>
             

        </form>
      </section>
</body>
</html>