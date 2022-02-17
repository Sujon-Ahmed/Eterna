<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:view_banner.php');
    }else{
        $banner_id = $_POST['id'];
        $author_id = $_SESSION['id'];
        $title = $_POST['title'];
        $banner_body = $_POST['banner_desc'];
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
                        $fileDestination = "uploads/banner/".$fileNewName;
                        if(move_uploaded_file($fileTmp,$fileDestination)){
                            
                            unlink("uploads/banner/".$oldphoto);
                            $status = $obj->update_with_photo_banner($author_id,$title,$banner_body,$fileNewName,$banner_id);

                            if($status == true){
                                Flash_data::success("Banner update SuccessFully");
                                header('location:banner_edit.php?id='.$banner_id);
                            }else{
                                Flash_data::error("Something Went Wrong!");
                                header('location:banner_edit.php?id='.$banner_id);
                            }
                        }

                    }else{
                        Flash_data::error("photo Upload Error.Please Try Again");
                        header('location:banner_edit.php?id='.$banner_id);
                    }
                }else{
                    Flash_data::error("Please Upload valid Photo");
                    header('location:banner_edit.php?id='.$banner_id);
                }

            }else{
                $status = $obj->update_without_photo_banner($author_id,$title,$banner_body,$oldphoto,$banner_id);

                if($status == true){
                    Flash_data::success("Banner update SuccessFully");
                    header('location:banner_edit.php?id='.$banner_id);
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:banner_edit.php?id='.$banner_id);
                }
            }
            
        }
?>