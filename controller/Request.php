<?php
    include("DB.php");
    class Request
    {
        public function save($p_name,$p_phone,$D_name)
        {
            $GLOBALS['conn']->query("INSERT INTO `requests`(`patient_Name`, `patient_Phone`, `Doctor`) VALUES ('$p_name','$p_phone','$D_name')");
        }
    }
?>