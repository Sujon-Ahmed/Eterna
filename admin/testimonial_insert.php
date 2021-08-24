<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST)){
        header('location:create_testimonial.php');
    }else{
        $name = $_POST['name'];
        $profession = $_POST['profession'];
        $message = $_POST['test_msg'];

        if(!empty($_FILES['file']['name'])){
            $fileName = $_FILES['file']['name'];
            $fileTmp = $_FILES['file']['tmp_name'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');

            if(in_array($fileActualExt,$allowed)){
                $fileError = $_FILES['file']['error'];
                if($fileError == 0){
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'uploads/testimonial/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        $status = $obj->insert_testimonial($name,$profession,$message,$fileNewName);
                        if($status == true){
                            Flash_data::success('Testimonial Create Successfully');
                            header('location:create_testimonial.php');
                        }else{
                            Flash_data::success('Something Went Wrong!');
                            header('location:create_testimonial.php');
                        }
                    }
                }else{
                    Flash_data::success('Upload Error!');
                    header('location:create_testimonial.php');
                }
            }else{
                Flash_data::success('This Type of File Ext Not Allowed!');
                header('location:create_testimonial.php');
            }
        }else{
            Flash_data::success('Please Select a Image!');
            header('location:create_testimonial.php');
        }
    }

?>