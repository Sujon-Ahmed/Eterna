<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check isset for submit
    if(!isset($_POST['submit'])){
        header('location:edit_port_img.php');
    }else{
        $id = $_POST['id'];
        $title = $_POST['port_title'];
        $category = $_POST['cat_id'];
        $oldphoto = $_POST['oldfile'];
        // check empty files
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            // in_array function check
            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                // check file error
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/portfolio/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        unlink('uploads/portfolio/'.$oldphoto);
                        $status = $obj->update_portfolio_with_photo($id,$title,$category,$fileNewName);
                        if($status == true){
                            Flash_data::success('Portfolio Update Successfully');
                            header('location:edit_port_img.php?id='.$id);
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:edit_port_img.php?id='.$id);
                        }
                    }
                }else{
                    Flash_data::error('File Error!');
                    header('location:edit_port_img.php?id='.$id);
                }
            }else{
                Flash_data::error('This type image not allowed!');
                header('location:edit_port_img.php?id='.$id);
            }
        }else{
            $status = $obj->update_portfolio_with_out_photo($id,$title,$category,$oldphoto);
            if($status == true){
                Flash_data::success('Portfolio Update Successfully');
                header('location:edit_port_img.php?id='.$id);
            }else{
                Flash_data::error('Something Went Wrong!');
                header('location:edit_port_img.php?id='.$id);
            }
        }
    }

?>