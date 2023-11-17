<?php

require 'functions.php';


if(isset($_POST["login"])){

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	//cek username
	if(mysqli_num_rows($result) === 1){

		//cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"])){

			//set session
			$_SESSION["login"] = true;

			//cek remember me
			if(isset($_POST['remember'])){
				//buat cookie
				setcookie('login', 'true', time()+60);
			}



			header("Location: index.php");
			exit;
		}
	}

			$error = true;
}


?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <!-- <title>Neumorphism Login Form UI | CodingNepal</title> -->
      <link rel="stylesheet" href="stylee.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <form class="kotak_login" action="" method="post">
   </head>
   <body>
      <div class="content">
         <div class="text">
            Login 
         </div>
    
            <div class="field">
            <input type="text"  class="form_login" name="username" id="username" required>
               <span class="fas fa-user"></span>
               <label for ="username"> Username</label>
            </div>
            <div class="field">
            <input type="password" class="form_login" name="password" id="password" required>
               <label for ="password"> Password</label>
               <span class="fas fa-lock"></span>
            </div>
            <div>

		<input type="checkbox" name="remember" id="remember">
		<label align="center" for="remember">Remember Me:</label>	

            <div>
			<button type="submit" class="tombol_login" name="login">Login</button>
		</div>
               Not a member?
               <a href="registrasi.php">signup now</a>
            </div>
         </form>
      </div>
   </body>
</html>