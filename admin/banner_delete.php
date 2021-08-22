<?php
    session_start();
    include 'main.php';
    $obj = new Main();
    include 'flash_data.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->get_banner_id($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()) {
                unlink('uploads/banner/'.$row->banner_img);
                $status = $obj->delete_banner($id);
                if($status == true){
                    Flash_data::success("Banner Deleted SuccessFully");
                    header('location:view_banner.php');
                }else{
                    Flash_data::error("Some Went Wrong.Please Try Again");
                    header('location:view_banner.php');
                }
            }
        }
    }


?>