<?php
require("Connection.php");

?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
   *{
   	padding: 0;
   	margin: 0;
   	box-sizing: border-box;
   	font-family: poppins;
   	text-decoration: none;
   }
   body{
   	margin: 8%;
   	background-color: #f2f4f6;

   }
   div.login-form{
   	width: 450px;
   	background-color: #204969;
   	padding: 12px 0px;
   	color: white;
   }
   div.login-form form{
   	padding: 30px 60px;
   }
   div.Login-Form form div.input-field{
   	display: flex;
   	flex-direction: row;
   	margin: 10px 0px;
   }
   div.Login-Form form div.input-field i{
   	color: darkslategray;
   	padding: 10px 14px;
   	background-color: #f2f4f6;
   	margin-right: 4px;
   }

</style>   
</head>    
<body>
	<div class="login-form">
		<h2>Techers's Login</h2>
		<form method="POST" action="">
			<div class="input-field">
				<i class="fas fa-user"></i>
				<input type="text" placeholder="Teachers Name" name="AdminName">
			</div>
			<div class="input-field">
				<i class="fas fa-lock"></i>
				<input type="password" placeholder="password" name="AdminPassword">
			</div>
			<button type="submit" name="Signin">Login IN</button>
		</form>
	</div>
	<?php
	if(isset($_POST['Signin'])){
		$query="SELECT * FROM `admin_login` WHERE 'Admin_Name'='$_POST[AdminName]' AND 'Admin_Password'='$_POST[AdminPassword]'";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)==1){
			echo"inCorrect";
		}
		else{
			echo"<script>alert('correct Password')</script";
			header("location: menu.php");
		}
	}
	?>


         
</body>     
</html
