<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:view_location.php');
    }else{
        $id = $_POST['id'];
        $title = $_POST['address_title'];
        $map = $_POST['map_location'];
        // status 
        $status = $obj->update_location($id,$title,$map);
        // check status
        if($status == true){
            Flash_data::success('Location Update Successfully');
            header('location:edit_location.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:edit_location.php?id='.$id);
        }
    }

?>