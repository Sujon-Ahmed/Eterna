<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:team_edit.php');
    }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $profession = $_POST['profession'];
        $about = $_POST['about_msg'];
        $oldphoto = $_POST['oldfile'];

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
                    $fileDestination = 'uploads/team/'.$fileNewName;
                    if(move_uploaded_file($fileTmp,$fileDestination)){
                        unlink('uploads/team/'.$oldphoto);
                        $status = $obj->update_team_photo($id,$name,$profession,$about,$fileNewName);
                        if($status == true){
                            Flash_data::success('Team Update Successfully');
                            header('location:team_edit.php?id='.$id);
                        }else{
                            Flash_data::error('Something Went Wrong!');
                            header('location:team_edit.php?id='.$id);
                        }
                    }
                }else{
                    Flash_data::error('File Error!');
                    header('location:team_edit.php?id='.$id);
                }                
            }else{
                Flash_data::error('This type image not allowed!');
                header('location:team_edit.php?id='.$id);
            }
        }else{
            $status = $obj->update_team_photo($id,$name,$profession,$about,$oldphoto);
            if($status == true){
                Flash_data::success('Team Update Successfully');
                header('location:team_edit.php?id='.$id);
            }else{
                Flash_data::error('Something Went Wrong!');
                header('location:team_edit.php?id='.$id);
            }
        }
    }
?>