<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->get_desc($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                $status = $obj->delete_desc($id);
                if($status == true){
                    Flash_data::success('Client Description Delete Successfully');
                    header('location:view_desc.php');
                }else{
                    Flash_data::success('Something Went Wrong!');
                    header('location:view_desc.php');
                }
            }
        }
    }

?>