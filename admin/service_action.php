<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:create_service.php');
    }else{
        $author_id = $_SESSION['id'];
        $icon = $_POST['ser_icon'];
        $title = $_POST['ser_title'];
        $body = $_POST['ser_desc'];
        //status
        $status = $obj->insert_service($author_id,$icon,$title,$body);
        // status check
        if($status == true){
            Flash_data::success('Service Create Successfully');
            header('location:view_service.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:create_service.php');
        }
    }


?>