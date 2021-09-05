<?php 
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:edit_pricing.php');
    }else{
        $id = $_POST['id'];
        $title = $_POST['title'];
        $price = $_POST['price'];
        $desc = $_POST['pricing_desc'];
        // status
        $status = $obj->update_pricing($id,$title,$price,$desc);
        // check status
        if($status == true){
            Flash_data::success('Pricing Table Update Successfully');
            header('location:edit_pricing.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:edit_pricing.php?id='.$id);
        }
    }

?>