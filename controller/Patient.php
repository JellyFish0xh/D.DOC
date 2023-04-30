<?php
    include "DB.php";
    class Patient{
        public function get_all(){
            $data = $GLOBALS['conn']->query("SELECT * FROM Patient");
            return $data;
        }
        public function get_Speific($phone){
            $data = $GLOBALS['conn']->query("SELECT * FROM Patient where Phone = $phone;");
            return $data;
        }
        public function insert($name,$phone,$password){
            $data = $GLOBALS['conn']->query("INSERT INTO `Patient`(`Name`, `Phone`, `Password`) VALUES ('$name','$phone','$password')");
            return $data;
        }
    }

?>