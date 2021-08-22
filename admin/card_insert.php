<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // condition start
    if(!isset($_POST['submit'])){
        header('location:create_card.php');
    }else{
        $card_icon = $_POST['card_icon'];
        $card_title = $_POST['card_title'];
        $card_desc = $_POST['card_desc'];
        // status
        $status = $obj->insert_card($card_icon,$card_title,$card_desc);
        // check status
        if($status == true){
            Flash_data::success('Card Data insert successfully');
            header('location:view_card.php');
        }else{
            Flash_data::error('Something went wrong!');
            header('create_card.php');
        }

    }
?>