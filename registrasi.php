<?php
require  'functions.php';

if(isset($_POST["register"])){
	if(registrasi($_POST) > 0){
		echo "<script>
		alert('user baru berhasil ditambahkan!');
		</script>";
	}else{
		echo mysqli_error($conn);
	}
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
      <form action="" method="post">
   </head>
   <body>
      <div class="content">   
        
         <div class="text">
          REGISTRASI
         </div>
         <form action="login.php">
            <div class="field">
            <div class="field">
               <input type="text"  name="username" id="username" required>
               <span class="fas fa-user"></span>
               <label for ="username"> Username</label>
               
            </div>
               <span class="fas fa-user"></span>
            </div>
            <div class="field">
            <input type="password"  name="password" id="password" required>
               <label for ="password"> Password</label>
               <span class="fas fa-lock"></span>
            </div>
            <div class="field">
            <input type="password"  name="password2" id="password2" required>
               <label for ="password2"> Konfirmasi Password</label>
               <span class="fas fa-lock"></span>
            </div>
            <div class="forgot-pass">
               <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" name="register">
			Register!
		</button>
            
               <a href="login.php">login</a>
            </div>
         </form>
      </div>
   </body>
</html>