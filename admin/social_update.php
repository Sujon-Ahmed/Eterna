<?php 
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    if(!isset($_POST['submit'])){
        header('location:edit_social.php');
    }else{
        $id = $_POST['id'];
        $name = $_POST['social_name'];
        $icon = $_POST['social_icon'];
        $link = $_POST['social_link'];
        // status
        $status = $obj->update_social($id,$name,$icon,$link);
        // status check
        if($status == true){
            Flash_data::success('Social Update Successfully');
            header('location:edit_social.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:edit_social.php?id='.$id);
        }
    }


?>