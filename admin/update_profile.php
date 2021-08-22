<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:edit_profile.php');
    }else{
        $id = $_SESSION['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];       
        $oldphoto = $_POST['oldfile'];  
        $phone = $_POST['phone'];      
        $about = $_POST['about'];
                
        if(!empty($_FILES['file']['name'])){
            // print_r($_FILES['file']);
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES["file"]["tmp_name"];
            $fileExt = explode(".",$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES["file"]["error"];
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = "uploads/admin/".$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        
                        unlink('uploads/admin/'.$oldphoto);
                        $status = $obj->update_profile($id,$fileNewName,$name,$email,$phone,$about);

                        if($status == true){
                            Flash_data::success("Profile update SuccessFully");
                            header('location:edit_profile.php');
                        }else{
                            Flash_data::error("Some Went Worng.Please Try Again");
                            header('location:edit_profile.php');
                        }
                    }

                }else{
                    Flash_data::error("photo Upload Error.Please Try Again");
                    header('location:edit_profile.php');
                }
            }else{
                Flash_data::error("Please Upload valid Photo");
                header('location:edit_profile.php');
            }

        }else{
            $status = $obj->update_profile($id,$oldphoto,$name,$email,$phone,$about);

            if($status == true){
                Flash_data::success("Profile update SuccessFully");
                header('location:edit_profile.php');;
            }else{
                Flash_data::error("Some Went Wrong.Please Try Again");
                header('location:edit_profile.php');
            }
        }           
       
    }

?>
