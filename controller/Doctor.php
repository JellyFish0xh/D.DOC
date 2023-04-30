<?php
        include "DB.php";
    class Doctor{
        public function get_all(){

            $data = $GLOBALS['conn']->query("SELECT * FROM Doctors");
            return $data;
        }
        public function get_F3(){
            $data = $GLOBALS['conn']->query("SELECT * FROM Doctors LIMIT 3;");
            return $data;
        }
        public function get_sp_doctors($id){
            $data = $GLOBALS['conn']->query("SELECT * FROM Doctors where Specialties = $id;");
            return $data;
        }
        public function get_sp_all(){

            $data = $GLOBALS['conn']->query("SELECT * FROM Specialties");
            return $data;
        }
        public function get_sp_ID($id){

            $data = $GLOBALS['conn']->query("SELECT * FROM Specialties where ID=$id");
            return $data;
        }
    }

?>