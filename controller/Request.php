<?php
    include("DB.php");
    class Request
    {
        public function get_all()
        {
            $data = $GLOBALS['conn']->query("SELECT * FROM requests");
            return $data;
        }
        public function save($p_name,$p_phone,$D_name)
        {
            $GLOBALS['conn']->query("INSERT INTO `requests`(`patient_Name`, `patient_Phone`, `Doctor`) VALUES ('$p_name','$p_phone','$D_name')");
        }
        public function Del($id)
        {
            $GLOBALS['conn']->query("DELETE FROM `requests` WHERE ID = $id");
        }
        public function Confrim($id)
        {
            $GLOBALS['conn']->query("UPDATE `requests` SET `statue`=1 WHERE ID =$id");
        }
    }
?>