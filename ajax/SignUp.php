<?php
include("../controller/Patient.php");
$patient = new Patient();
$username = $_POST["Username"];
$phone = $_POST["phone"];
$phone = preg_replace('/[^0-9]/', '', $phone);
if (strlen($phone) != 11) {
    echo "Wrong Phone Number";
    exit();
}
$password = sha1($_POST["password"]);
if(!($username =="" || $phone ==""||$password=="")){
    if($password==sha1($_POST["C_password"])){
        $data = $patient->get_Speific($phone);
        $rows = mysqli_num_rows($data);
        if($rows<1){
            $patient->insert($username,$phone,$password);
            setcookie("name", $username, time() + (86400), "/");
            echo "Done";
        }
        else{
            echo "Already Registerd <br> <a href='forget.php'>Forget Password ?</a>";
        }
    }
    else{
        echo "password doesn't match";
    }
}
else{
    echo "Enter Vaild Data";
}
?>