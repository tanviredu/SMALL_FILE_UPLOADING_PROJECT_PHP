<?php 
    require_once("config.php");
    require_once("database.php");
    require_once("user.php");

    class Input{


        public function input_data(){
            global $user;
            if(isset($_POST['submit'])){
                // fetch all the data
                $upload_folder="images_for_upload/";
                $name=$_POST['name'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $dname=$_POST['dname'];
                $uid=$_POST['id'];
                $image_name=$_FILES['image']['name'];
                $tmp_name=$_FILES['image']['tmp_name'];
                $folder = $upload_folder.$image_name;
                move_uploaded_file($tmp_name,$folder);

                $result=$user->create_user_info($name,$mobile,$dname,$uid,$image_name);
                
                echo "<script> alert('Data added successfully') </script>";
                

                
                
            }

        }
    }

    $inp = new Input();

?>