<?php
    include("../controller/Doctor.php");
    $id =$_POST["id"];
    $x = new Doctor();
    $y = $x->get_sp_doctors($id);
    while($_y =$y->fetch_assoc()){
        $id = $_y["ID"];
        $name = $_y["Name"];
        echo "<option value='$id'>$name</option>";
    }
?>