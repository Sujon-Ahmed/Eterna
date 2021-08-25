<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:create_testimonial_desc.php');
    }else{
        $author = $_SESSION['id'];
        $body = $_POST['test_desc'];
        $status = $obj->insert_test_desc($author,$body);
        // check status
        if($status == true){
            Flash_data::success('Client Description insert successfully');
            header('location:create_testimonial_desc.php');
        }else{
            Flash_data::error('Something went wrong!');
            header('create_testimonial_desc.php');
        }
    }

?>