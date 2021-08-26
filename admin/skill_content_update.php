<?php 
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check isset
    if(!isset($_POST['submit'])){
        header('location:edit_content.php');
    }else{
        $id = $_POST['id'];
        $title = $_POST['content_title'];
        $body = $_POST['content_desc'];
        $oldphoto = $_POST['oldfile'];
        // check uploads image
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            // file in_array check
            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                // check fileError
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/skill/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        unlink('uploads/skill/'.$oldphoto);
                        $status = $obj->update_content_with_photo($id,$title,$body,$fileNewName);
                        // check status
                        if($status == true){
                            Flash_data::success('Content Update Successfully');
                            header('location:edit_content.php?id='.$id);
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:edit_content.php?id='.$id);
                        }
                    }
                }else{
                    Flash_data::error('Photo Uploads Error!');
                    header('location:edit_content.php?id='.$id);
                }
            }else{
                Flash_data::error('Please Select a Valid Photo!');
                header('location:edit_content.php?id='.$id);
            }
        }else{
            $status = $obj->update_content_without_photo($id,$title,$body,$oldphoto);
            // check status
            if($status == true){
                Flash_data::success('Content Update Successfully');
                header('location:edit_content.php?id='.$id);
            }else{
                Flash_data::error('Something Went Wrong!');
                header('location:edit_content.php?id='.$id);
            }
        }
    }


?>