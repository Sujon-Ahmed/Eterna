<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $details = $obj->get_content_details($id);
        if($details->num_rows > 0){
            while($row = $details->fetch_object()){
                unlink('uploads/skill/'.$row->content_image);
                $status = $obj->delete_content($id);
                // check status
                if($status == true){
                    Flash_data::success('Content Delete Successfully');
                    header('location:view_content_test.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_content_test.php');
                }
            }
        }
    }

?>