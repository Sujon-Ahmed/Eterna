<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $status = $obj->delete_social($id);
        // status check
        if($status == true){
            Flash_data::success('Social Media Delete Successfully');
            header('location:view_social.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:view_social.php');
        }
    }

?>