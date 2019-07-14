<?php
    require_once('config.php');
    require_once("database.php");


    class User {
        public function create_user_info($name,$mobile,$dname,$uid,$image_name){
            global $database;
            // create sql for the 
            $sql = "INSERT INTO user (name, mobile, dname, uid, image_name)
            VALUES ('$name', '$mobile', '$dname', {$uid}, '$image_name');";
            $database->query($sql);
            
        }

        public function get_all_user(){
            global $database;
            $sql = "SELECT * FROM user";
            $result = $database->query($sql);
            return $result;
        }
    }

    $user =  new User(); 
?>