<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:view_testimonial.php');
    }else{
        $author = $_SESSION['id'];
        $id = $_POST['id'];
        $desc = $_POST['test_desc'];
        // status
        $status = $obj->update_testimonial_desc($id,$author,$desc);
        // status check
        if($status == true){
            Flash_data::success('Description Update Successfully');
            header('location:edit_test_desc.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:edit_test_desc.php?id='.$id);
        }
    }

?>