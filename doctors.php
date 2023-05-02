<!DOCTYPE html>
<?php
   include("controller/Doctor.php");
?>
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
<body>
  <div class="color">
  <?php include("inc/header.php")?>
  <section>
    <select id="Select_SP" class="form-select" aria-label="Default select example">
      <option selected readonly value="ALL">All</option>
    <?php
                    $sp = new Doctor();
                    $data = $sp->get_sp_all();
                    while($_SP = $data->fetch_assoc()){?>
                      <option value="<?= $_SP['ID']?>" > <?= $_SP['Name']?> </option>
                  <?php } ?>
    </select>
      <div class="container DOC_Cards">

      </div>
  </section>
    
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
  <script src="ajax/all_doctors.js"></script>
</body>
</html>