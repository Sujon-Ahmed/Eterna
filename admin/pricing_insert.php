<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check submit button isset
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $price = $_POST['price'];
        $desc = $_POST['pricing_desc'];
        // status
        $status = $obj->insert_pricing($title,$price,$desc);
        // check status
        if($status == true){
            Flash_data::success('Pricing Table Insert Successfully');
            header('location:create_pricing.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:create_pricing.php');
        }
    }

?>