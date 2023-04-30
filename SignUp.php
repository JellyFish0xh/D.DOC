<?php
if(isset($_COOKIE["name"])){
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D.DOC</title>
  <link rel="icon" type="image/x-icon" href="Images/D.Doc.png" />
  <link rel="stylesheet" href="Css/Normalize.css">
  <link rel="stylesheet" href="Css/main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body class="logbody">
  <div class="color">
  <div class="logcontainer">
	<div class="screen">
		<div class="screen__content">
			<form class="login Signupform">
        <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input required type="text" class="login__input" placeholder="Enter Name" name="Username" autocomplete="off"> 
				</div>
				<div class="login__field phone">
					<i class="login__icon fas fa-user"></i>
					<input required type="text" class="login__input" placeholder="Phone Number" name="phone" autocomplete="off">
				</div>
				<div class="login__field password">
					<i class="login__icon fas fa-lock"></i>
					<input required type="password" class="login__input" placeholder="Password" name="password" autocomplete="off">
				</div>
				<div class="login__field password end">
					<i class="login__icon fas fa-lock"></i>
					<input required type="password" class="login__input" placeholder="Confirm Password" name="C_password">
				</div>
				<button class="button login__submit" type="submit" autocomplete="off">
					<span class="button__text">Register</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
  
<footer>
  <hr>
  <div class="container">
    <div class="logo">D.Doc</div>
    <div class="social">
      <a href="https://www.facebook.com/" target="_blank"> <ion-icon name="logo-facebook"></ion-icon></a>
      <a href="https://www.whatsapp.com/" target="_blank"> <ion-icon name="logo-whatsapp"></ion-icon></a>
      <a href="https://www.google.com/" target="_blank"> <ion-icon name="logo-google"></ion-icon></a>
      <a href="https://www.youtube.com/" target="_blank"> <ion-icon name="logo-youtube"></ion-icon></a>
    </div>
  </div>
</footer>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Icons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="ajax/signup.js"></script>
</body>
</html>