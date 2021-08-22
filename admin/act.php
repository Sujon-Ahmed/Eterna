<?php
    session_start();
    include 'main.php';
    include 'flash_data.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:create_banner.php');
    }else{
        $author_id = $_SESSION['id'];
        $banner_title = $_POST['title'];
        $banner_desc = $_POST['banner_desc'];

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
                    $fileDestination = "uploads/banner/".$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){

                        $status = $obj->banner_create($author_id,$banner_title,$banner_desc,$fileNewName);

                        if($status == true){
                            Flash_data::success("Banner Create SuccessFully");
                            header('location:create_banner.php');
                        }else{
                            Flash_data::error("Something Went Wrong!");
                            header('location:create_banner.php');
                        }
                    }

                }else{
                    Flash_data::error("File Error!");
                    header('location:create_banner.php');
                }
            }else{
                Flash_data::error("This Type of File Ext Not Allowed!");
                header('location:create_banner.php');
            }

        }else{
            Flash_data::error("Please Select an Image!");
            header('location:create_banner.php');
        }


    }

?>