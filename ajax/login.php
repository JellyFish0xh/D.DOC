<?php
   include("../controller/Patient.php");
   $patient = new Patient();
   $phone = $_POST["p_num"]??"";
   $password = sha1($_POST["P_password"]);
    if($phone !=""){
        $data = $patient->get_Speific($phone);
        $rows = mysqli_num_rows($data);
        $data =$data->fetch_assoc();
        if($rows > 0){
            if($password == $data["Password"]){
                setcookie("name", $data["Name"], time() + (86400), "/");
                setcookie("phone", $data["Phone"], time() + (86400), "/");
                echo "Done";
            }
            else{
                echo "Wrong Phone Number or Password";
            }
        }
        else{
            echo "Wrong Phone Number or Password";
        }
    }
    else{
        echo "Enter Data";
    }
?>