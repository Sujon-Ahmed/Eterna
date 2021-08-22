<?php
    session_start();
    include 'main.php';
    include 'flash_data.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:create_about.php');
    }else{
        $author_id = $_SESSION['id'];
        $about_title = $_POST['about_title'];
        $about_desc = $_POST['about_desc'];

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
                    $fileDestination = "uploads/about/".$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){

                        $status = $obj->about_create($author_id,$about_title,$about_desc,$fileNewName);

                        if($status == true){
                            Flash_data::success("About Data Insert SuccessFully");
                            header('location:create_about.php');
                        }else{
                            Flash_data::error("Something Went Wrong!");
                            header('location:create_about.php');
                        }
                    }
                }else{
                    Flash_data::error("File Error!");
                    header('location:create_about.php');
                }
            }else{
                Flash_data::error("This Type of File Ext Not Allowed!");
                header('location:create_about.php');
            }
        }else{
            Flash_data::error("Please Select an Image!");
            header('location:create_about.php');
        }
    }
?>