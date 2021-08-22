<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:view_about.php');
    }else{
        $about_id = $_POST['id'];
        $author_id = $_SESSION['id'];
        $title = $_POST['about_title'];
        $body = $_POST['about_desc'];
        $oldphoto = $_POST['oldfile'];

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
                            
                            unlink("uploads/about/".$oldphoto);
                            $status = $obj->update_with_photo_about($author_id,$title,$body,$fileNewName,$about_id);

                            if($status == true){
                                Flash_data::success("About Section update SuccessFully");
                                header('location:about_edit.php?id='.$about_id);
                            }else{
                                Flash_data::error("Some Went Worng.Please Try Again");
                                header('location:about_edit.php?id='.$about_id);
                            }
                        }

                    }else{
                        Flash_data::error("photo Upload Error.Please Try Again");
                        header('location:about_edit.php?id='.$about_id);
                    }
                }else{
                    Flash_data::error("Please Upload valid Photo");
                    header('location:about_edit.php?id='.$about_id);
                }

            }else{
                $status = $obj->update_without_photo_about($author_id,$title,$body,$oldphoto,$about_id);

                if($status == true){
                    Flash_data::success("About Section update SuccessFully");
                    header('location:about_edit.php?id='.$about_id);
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:about_edit.php?id='.$about_id);
                }
            }
            
        }
?>