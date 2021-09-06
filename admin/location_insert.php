<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    if(isset($_POST['submit'])){
        $title = $_POST['address_title'];
        $map = $_POST['map_location'];
        // status
        $status = $obj->insert_address($title,$map);
        // check status
        if($status == true){
            Flash_data::success('Address Insert Successfully');
            header('location:create_location.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:create_location.php');
        }
    }

?>