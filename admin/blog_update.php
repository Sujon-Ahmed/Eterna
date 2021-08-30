<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check isset submit button
    if(!isset($_POST['submit'])){
        header('location:blog_edit.php');
    }else{
        $author = $_SESSION['id'];
        $id = $_POST['id'];
        $title = $_POST['blog_title'];
        $category = $_POST['blog_cat_id'];
        $desc = $_POST['blog_desc'];
        $oldphoto = $_POST['oldfile'];
        // check image
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpeg','jpg','png');
            // check in_array function
            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                // check file error
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/blog/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        unlink('uploads/blog/'.$oldphoto);
                        $status = $obj->update_blog_photo($author,$id,$title,$category,$desc,$fileNewName);
                        // check status
                        if($status == true){
                            Flash_data::success('Blog Post Update Successfully');
                            header('location:blog_edit.php?id='.$id);
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:blog_edit.php?id='.$id);
                        }
                    }
                }else{
                    Flash_data::error('File Uploads Error!');
                    header('location:blog_edit.php?id='.$id);
                }
            }else{
                Flash_data::error('This type file not allowed!');
                header('location:blog_edit.php?id='.$id);
            }
        }else{
            $status = $obj->update_blog_photo($author,$id,$title,$category,$desc,$oldphoto);
            // check status
            if($status == true){
                Flash_data::success('Blog Post Update Successfully');
                header('location:blog_edit.php?id='.$id);
            }else{
                Flash_data::error('Something Went Wrong!');
                header('location:blog_edit.php?id='.$id);
            }
        }
    }

?>