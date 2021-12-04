<?php
session_start();
include 'flash_data.php';
include 'main.php';
$obj = new Main();
// delete pricing
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $status = $obj->delete_pricing_plan($id);
    // check status
    if ($status == true) {
        Flash_data::success('Pricing Plan Delete Success');
        header('location: view_pricing.php');
    } else {
        Flash_data::error('Something Went Wrong!');
        header('location:view-pricing.php');
    }
}

?>