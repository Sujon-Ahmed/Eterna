<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit'])){
        $name = $_POST['progress_name'];
        $value = $_POST['progress_value'];
        $status = $obj->insert_progress($name,$value);
        // check status
        if($status == true){
            Flash_data::success('Progress add Successfully');
            header('location:create_progress.php');
        }else{
            Flash_data::error('Something went wrong!');
            header('location:create_progress.php');
        }
    }

?>