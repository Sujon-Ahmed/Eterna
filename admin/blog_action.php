<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check isset for submit button
    if(isset($_POST['submit'])){
        $author = $_SESSION['id'];
        $title = $_POST['blog_title'];
        $category = $_POST['blog_cat_id'];
        $desc = $_POST['blog_desc'];
        // empty function check for image
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            // check in_array function
            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                // check file error
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/blog/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        $status = $obj->insert_blog($author,$title,$category,$desc,$fileNewName);
                        // check status
                        if($status == true){
                            Flash_data::success('Post Publish Successfully');
                            header('location:cr_blog_post.php');
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:cr_blog_post.php');
                        }
                    }
                }else{
                    Flash_data::error('File Uploads Error!');
                    header('location:cr_blog_post.php');
                }
            }else{
                Flash_data::error('This Type File Not Allowed!');
                header('location:cr_blog_post.php');
            }
        }else{
            Flash_data::error('Please Select an Image!');
            header('location:cr_blog_post.php');
        }

    }
   

?>