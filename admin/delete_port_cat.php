<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->get_port_cat_with_id($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                $status = $obj->delete_port_cat($id);
                if($status == true){
                    Flash_data::success('Category Delete successfully');
                    header('location:view_port_cat.php?id='.$id);
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_port_cat.php?id='.$id);
                }
            }
        }
    }
?>