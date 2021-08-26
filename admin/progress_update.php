<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:edit_progress.php');
    }else{
        $id = $_POST['id'];
        $name = $_POST['progress_name'];
        $value = $_POST['progress_value'];
        $status = $obj->update_progress($id,$name,$value);
        // check status
        if($status == true){
            Flash_data::success('Progress Update Successfully');
            header('location:edit_progress.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:edit_progress.php?id='.$id);
        }
    }

?>