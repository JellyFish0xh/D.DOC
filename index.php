<?php include("controller/Doctor.php")?>
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
<body>
  <div class="color">
<?php include("inc/header.php")?>
  <section class="landing">
    <div class="container">
      <div class="landingText" id="Home">
        <div class="mainText">
          A Dedicated Doctor You Can Trust
        </div>
          <span class="secText">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt ratione ad voluptatem maxime voluptatum dolor neque odit aperiam hic eveniet, laudantium, quam iure unde! Ducimus sed error eaque cum.
          </span>
          <a href="Book.php">
          <button class="book" onclick="">Book Now</button>
        </a>
      </div>
      <img src="images/Doctor 1.png" alt="">
    </div>
  </section>
</div>
<div class="sectionText" id="Service">
  Experienced In Multiple <br> Medical Specialitiesdoctors.html
</div>
<section class="services">
  <div class="container">
    <div class="card">
      <ion-icon class="ion" name="heart-outline"></ion-icon>    
      <span>Cardiology</span>
    </div>
    <div class="card">
      <ion-icon class="ion" name="bandage-outline"></ion-icon>
      <span>Gastroenterology</span>
    </div>
    <div class="card">
      <ion-icon class="ion" name="eye-outline"></ion-icon>  
      <span>Ophthalmology</span>
    </div>
  </div>
</section>
<section class="consaltant" id="About">
  <div class="container">
    <img src="images/Doctor 2.png" alt="">
    <div class="consText">
      <div class="mainText">
        Consulant A Doctor Anytime Anywhere By Search
      </div>
        <span class="secText">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt ratione ad voluptatem maxime voluptatum dolor neque odit aperiam hic eveniet, laudantium, quam iure unde! Ducimus sed error eaque cum.
        </span>
        <a href="Book.php">
          <button class="book" onclick="">Book Now</button>
        </a>
    </div>
  </div>
</section>
<section class="network">
  <div class="container">
    <div class="networkText">
      <div class="mainText">
        A Dedicated Doctor You Can Trust
      </div>
        <span class="secText">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt ratione ad voluptatem maxime voluptatum dolor neque odit aperiam hic eveniet, laudantium, quam iure unde! Ducimus sed error eaque cum.
        </span>
        <a href="Book.php">
          <button class="book" onclick="">Book Now</button>
        </a>
    </div>
    <img src="images/Doctor 3.png" alt="">
  </div>
</section>
<div class="doccolor">
  <div class="sectionText">
    Best Doctors
  </div>
  <section class="doctors">
    <div class="container">
    <?php
    $doctors = new Doctor();
    $all_Data = $doctors->get_F3();
    while ($doctor = $all_Data->fetch_assoc()){?>
      <div class="card">
        <div class="docimg">
          <img src="Images/Doctor_img/Doctor_<?=$doctor['ID']?>.png" alt="">
        </div>
        <div class="text">
          <div class="name">
            Dr.<?= $doctor["Name"]?>
          </div>
          <div class="specialty">
          <?= $doctor["Description"]?>
        </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <a href="doctors.php">View All The Doctors</a>
  </section>
</div>
<div class="sectionText">
  What Our customers Say
</div>
<p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore</p>
  <section class="says">
    <div class="container">
      <div class="card">
        <div class="pimg">
          <img src="images/Doctor 4.png" alt="">
          <div class="name">
            Leonard Smith
          </div>
        </div>
        <div class="pov">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, hic asperiores? Quibusdam reprehenderit maiores voluptatem. Magni, recusandae. Fuga cupiditate nulla culpa doloribus cum, aut, soluta eaque amet odit laborum repellat.
        </div>
      </div>
      <div class="card">
        <div class="pimg">
          <img src="images/Doctor 4.png" alt="">
          <div class="name">
            Leonard Smith
          </div>
        </div>
        <div class="pov">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, hic asperiores? Quibusdam reprehenderit maiores voluptatem. Magni, recusandae. Fuga cupiditate nulla culpa doloribus cum, aut, soluta eaque amet odit laborum repellat.
        </div>
      </div>
      <div class="card">
        <div class="pimg">
          <img src="images/Doctor 4.png" alt="">
          <div class="name">
            Leonard Smith
          </div>
        </div>
        <div class="pov">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, hic asperiores? Quibusdam reprehenderit maiores voluptatem. Magni, recusandae. Fuga cupiditate nulla culpa doloribus cum, aut, soluta eaque amet odit laborum repellat.
        </div>
      </div>
    </div>
  </section>
<footer>
  <hr>
  <div class="container">
    <div class="logo">D.Doc</div>
    <div class="social">
      <a href="https://www.google.com/" target="_blank"> <ion-icon name="logo-facebook"></ion-icon></a>
      <a href="https://www.google.com/" target="_blank"> <ion-icon name="logo-whatsapp"></ion-icon></a>
      <a href="https://www.google.com/" target="_blank"> <ion-icon name="logo-google"></ion-icon></a>
      <a href="https://www.google.com/" target="_blank"> <ion-icon name="logo-youtube"></ion-icon></a>
    </div>
  </div>
</footer>
<!-- js and bootstrap-->
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Icons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
