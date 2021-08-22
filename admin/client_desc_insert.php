<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // condition start
    if(!isset($_POST['submit'])){
        header('location:client_desc.php');
    }else{
        $author = $_SESSION['id'];
        $client_desc = $_POST['client_desc'];
        // status
        $status = $obj->insert_client_desc($author,$client_desc);
        // check status
        if($status == true){
            Flash_data::success('Client Description insert successfully');
            header('location:view_desc.php');
        }else{
            Flash_data::error('Something went wrong!');
            header('client_desc.php');
        }

    }
?>