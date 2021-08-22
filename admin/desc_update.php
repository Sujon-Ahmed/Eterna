<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // condition check  
    if(!isset($_POST['submit'])){
        header('location:view_desc.php');
    }else{
        $author = $_SESSION['id'];
        $id = $_POST['id'];
        $desc = $_POST['client_desc'];
        // status
        $status = $obj->update_desc($author,$id,$desc);
        // status check
        if($status == true){
            Flash_data::success('Description Update Successfully');
            header('location:desc_edit.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:desc_edit.php?id='.$id);
        }
    }

?>