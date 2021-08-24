<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // isset submit
    if(!isset($_POST['submit'])){
        header('location:view_testimonial.php');
    }else{
        $test_id = $_POST['id'];
        $name = $_POST['name'];
        $profession = $_POST['profession'];
        $message = $_POST['test_msg'];
        $oldphoto = $_POST['oldfile'];
        // check image
        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            // array check
            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/testimonial/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        unlink("uploads/testimonial/".$oldphoto);
                        $status = $obj->update_with_photo($test_id,$name,$profession,$message,$fileNewName);
                        if($status == true){
                            Flash_data::success('Testimonial Update Successfully');
                            header('location:edit_testimonial.php?id='.$test_id);
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:edit_testimonial.php?id='.$test_id);
                        }
                    } 
                }else{
                    Flash_data::error('File Error!');
                    header('location:edit_testimonial.php?id='.$test_id);
                }
            }else{
                Flash_data::error('Please Uploads Valid Photo');
                header('location:edit_testimonial.php?id='.$test_id);
            }
        }else{
            $status = $obj->update_without_photo($test_id,$name,$profession,$message,$oldphoto);
            if($status == true){
                Flash_data::success('Testimonial Update Successfully');
                header('location:edit_testimonial.php?id='.$test_id);
            }else{
                Flash_data::error('Something Went Wrong!');
                header('location:edit_testimonial.php?id='.$test_id);
            }
        }
    }
?>