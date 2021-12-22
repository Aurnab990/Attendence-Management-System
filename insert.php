<?php
	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		include "z_db.php";

		$query = "INSERT INTO  `add_students`(`Name` ,  `ID` ,  `mobile` ,  `email`) VALUES('$name','$id','$mobile','$email')";

		$q = mysqli_query($con,$query)or die("insert error");
		
			print "<script>";
			print "alert('Member add successfully....');";
			print "self.location='index.php';";
			print "</script>";
		
	}
	
?>
	