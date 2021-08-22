<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // condition check
    if(!isset($_POST['submit'])){
        header('location:view_service.php');
    }else{
        $author = $_SESSION['id'];
        $id = $_POST['id'];
        $icon = $_POST['ser_icon'];
        $title = $_POST['ser_title'];
        $body = $_POST['ser_desc'];
        // status
        $status = $obj->ser_update($author,$id,$icon,$title,$body);
        // check status
        if($status == true){
            Flash_data::success('Service Section Update Successfully');
            header('location:service_edit.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:service_edit.php?id='.$id);
        }
    }
?>