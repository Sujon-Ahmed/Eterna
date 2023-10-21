<?php
session_start();
include 'flash_data.php';
include 'main.php';
$obj = new Main();

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $location = $obj->get_location_value($id);
    
    if($location->num_rows > 0) {
        while($row = $location->fetch_object()) {  
            $status = $obj->delete_location_address($id);
            if($status == true) {
                Flash_data::success('Location has been Deleted!');
                header('location: view_location.php');
            } else {
                Flash_data::error('Something happen wrong!');
                header('location: view_location.php');
            }
        }
    }
}