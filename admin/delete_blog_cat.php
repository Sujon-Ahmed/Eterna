<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $get_cat_b_id = $obj->get_b_cat($id);
        if($get_cat_b_id->num_rows > 0){
            while($row = $get_cat_b_id->fetch_object()){
                $status = $obj->delete_b_cat($id);
                if($status == true){
                    Flash_data::success('Blog Category Delete Successfully');
                    header('location:view_b_cat_cat.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_b_cat_cat.php');
                }
            }
        }
    }

?>