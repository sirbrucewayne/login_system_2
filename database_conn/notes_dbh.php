<?php
 if(isset($_POST['note'])|| isset($_POST['professor'])){
         include 'dbh.php';
         $Note = mysqli_real_escape_string($conn,$_POST['Note']);
         $var = "INSERT INTO profs (notes) VALUES('$Note');" ;
         mysqli_query($conn,$var);
         header("Location: ../notes.php?saved=success");
       	 exit();

 }
 elseif(isset($_POST['view']) || isset($_POST['student'])){
 	    
         include 'dbh.php';

         $query = "SELECT * FROM profs " ;

         $res=mysqli_query($conn,$query);
    
         while ($rows = mysqli_fetch_assoc($res)) 
         {
          printf("%d. %s <br>",$rows["prof_id"],$rows["notes"]); 
         }
}
 else{
 	header("Location: ../notes.php"); 
	exit();
 }


 