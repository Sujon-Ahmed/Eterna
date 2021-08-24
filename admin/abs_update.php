<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:edit_abs.php');
    }else{
        $id = $_POST['id'];
        $icon = $_POST['abs_icon'];
        $value = $_POST['abs_value'];
        $title = $_POST['abs_title'];
        $desc = $_POST['abs_desc'];

        if($icon != '' && $value != '' && $title != '' && $desc != ''){
            $status = $obj->update_abs($id,$icon,$value,$title,$desc);
            // check status
            if($status == true){
                Flash_data::success('Card Update Successfully');
                header('location:edit_abs.php?id='.$id);
            }else{
                Flash_data::error('Something Went Wrong!');
                header('location:edit_abs.php?id='.$id);
            }
        }
    }
?>