<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check isset for submit button
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $profession = $_POST['profession'];
        $about = $_POST['about_msg'];
        // check uploads image
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/team/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        $status = $obj->insert_team($name,$profession,$about,$fileNewName);
                        if($status == true){
                            Flash_data::success('Team Create Successfully');
                            header('location:create_team.php');
                        }else{
                            Flash_data::success('Something Went Wrong!');
                             header('location:create_team.php');
                        }
                    }
                }else{
                    Flash_data::success('Upload Error!');
                     header('location:create_team.php');
                }
            }else{
                Flash_data::success('This Type of File Ext Not Allowed!');
                 header('location:create_team.php');
            }
        }else{
            Flash_data::success('Please Select a Image!');
            header('location:create_team.php');
        }
    }

?>