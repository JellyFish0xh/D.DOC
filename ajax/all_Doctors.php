<?php
    include("../controller/Doctor.php");
    $id =$_POST["id"];
    $x = new Doctor();
    $y = $x->get_sp_doctors($id);
    while($_y =$y->fetch_assoc()){
        $id = $_y["ID"];
        $name = $_y["Name"];
        $desc = $_y["Description"];
        echo "<div class='card mb-3' style='max-width: 540px;'>
        <div class='row g-0'>
          <div class='col-md-4'>
            <img width='150px' src='Images/Doctor_img/Doctor_$id.png' class='img-fluid rounded-start'>
          </div>
          <div class='col-md-8'>
            <div class='card-body'>
              <h5 class='card-title'>$name</h5>
              <p class='card-text'>$desc</p>
            </div>
        </div>
    </div><hr>";
    }
?>