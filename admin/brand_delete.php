<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $brand_id = $_GET['id'];
        $result = $obj->get_brand_id($brand_id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                unlink('uploads/brands/'.$row->brand_img);
                $status = $obj->delete_brand($brand_id);
                if($status == true){
                    Flash_data::success('Brand Delete Successfully');
                    header('location:view_brand.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_brand.php');
                }
            }
        }
    }
?>