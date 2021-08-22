<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->get_about_details($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                unlink('uploads/about/'.$row->about_image);
                $status = $obj->delete_about($id);
                if($status == true){
                    Flash_data::success('About Section Delete Successfully');
                    header('location:view_about.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_about.php');
                }
            }
        }
    }

?>