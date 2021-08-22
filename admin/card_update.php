<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:view_card.php');
    }else{
        $id = $_POST['id'];
        $icon = $_POST['card_icon'];
        $title = $_POST['card_title'];
        $body = $_POST['card_desc'];
        // status
        $status = $obj->card_update($id,$icon,$title,$body);
        // check status
        if($status == true){
            Flash_data::success("Card Update Successfully");
            header('location:card_edit.php?id='.$id);
        }else{
            Flash_data::error("Something Went Wrong!");
            header('location:card_edit.php?id='.$id);
        }
    }   
?>
