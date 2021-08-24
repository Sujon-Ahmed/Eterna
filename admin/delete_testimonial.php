<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->details_testimonial($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                unlink('uploads/testimonial/'.$row->test_img);
                $status = $obj->delete_testimonial($id);
                if($status == true){
                    Flash_data::success('Testimonial Delete Successfully');
                    header('location:view_testimonial.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_testimonial.php');
                }
            }
        }
    }
?>