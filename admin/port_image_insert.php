<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // isset for submit button
    if(isset($_POST['submit'])){
        $port_title = $_POST['port_title'];
        $port_cat = $_POST['port_cat_id'];
        // check image empty
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            // in_array function
            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                // check file error
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/portfolio/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        $status = $obj->insert_image($port_title,$port_cat,$fileNewName);
                        // check status
                        if($status == true){
                            Flash_data::success('Portfolio Insert Successfully');
                            header('location:port_image.php');
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:port_image.php');
                        }
                    }
                }else{
                    Flash_data::error('File Error!');
                    header('location:port_image.php');
                }
            }else{
                Flash_data::error('This type photo not allowed!');
                header('location:port_image.php');
            }
        }else{
            Flash_data::error('Select an Image!');
            header('location:port_image.php');
        }
    }
?>