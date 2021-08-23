<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:create_abs.php');
    }else{
        $icon = $_POST['abs_icon'];
        $value = $_POST['abs_value'];
        $title = $_POST['abs_title'];
        $body = $_POST['abs_desc'];
        // status
        $status = $obj->insert_abs($icon,$value,$title,$body);
        // check status
        if($status == true){
            Flash_data::success('About Card Create Successfully');
            header('location:create_abs.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:create_abs.php');
        }
    }
?>