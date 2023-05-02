<?php
  if(!isset($_COOKIE["name"])){
    header("location:login.php");
  }
  include("controller/Doctor.php")
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
		<?php include("inc/header.php");?>

		<div class="logcontainer">
			<div class="screen">
				<div class="screen__content">
					<form class="login" id="R_Form">
						<div class="login__field">
							<i class="login__icon fas fa-user"></i>
							<input type="text" class="login__input" placeholder="Phone Number" name = "Phone"  value="<?=$_COOKIE["phone"] ?>" readonly>
						</div>
						<div class="login__field">
							<i class="login__icon fas fa-lock"></i>
							<input type="text" class="login__input" placeholder="Name" name="Name"  value="<?=$_COOKIE["name"]?>" readonly>
						</div>
						<select name="speciality" id="Select_SP" class="form-select" aria-label="Default select example">
                 		<option value="Null" id="wbrd">التخصصات</option> 
				  <?php
                    $sp = new Doctor();
                    $data = $sp->get_sp_all();
                    while($_SP = $data->fetch_assoc()){?>
                      <option value="<?= $_SP['ID']?>"><?= $_SP['Name']?></option>
                  ?>
                  <?php } ?>
						</select>
						<select id="Doctor_names" disabled class="form-select" aria-label="Default select example" name="D_name">
						<option value="NULL">اختار التخصص اولا</option>
						</select>
						<button class="button login__submit">
							<span class="button__text">Confirm</span>
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
	</div>
  <!-- Bootstrap modal HTML code -->
<div class="modal fade" id="processing-modal" tabindex="-1" role="dialog" aria-labelledby="processing-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <i class="fa fa-spinner fa-pulse fa-3x"></i>
        <h4 class="mt-2">Thanks to use our service admin will call you soon 
          شكرا لاستخدامك خداماتنا سنتواصل معك قريبا لتاكيد عمليه الحجز
        </h4>
      </div>
    </div>
  </div>
</div>
<!-- js and bootstrap-->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- Icons -->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="ajax/Book.js"></script>
</body>
</html>