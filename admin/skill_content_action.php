<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check isset for submit button
    if(!isset($_POST['submit'])){
        header('location:content_create_test.php');
    }else{
        $title = $_POST['content_title'];
        $body = $_POST['content_desc'];
        // check uploads image for empty
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            // check in_array
            if(in_array($fileActualExt,$allowed)){
                // file error
                $fileError = $_FILES['file']['error'];
                // check file error
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/skill/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        $status = $obj->insert_content($title,$body,$fileNewName);
                        // check status
                        if($status == true){
                            Flash_data::success('Content Insert Successfully');
                            header('location:content_create_test.php');
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:content_create_test.php');
                        }
                    }
                }else{
                    Flash_data::error('File Error!');
                    header('location:content_create_test.php');
                }
            }else{
                Flash_data::error('This type or file extension not allow!');
                header('location:content_create_test.php');
            }
        }else{
            Flash_data::error('Please select an image!');
            header('location:content_create_test.php');
        }
    }

?>