<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $get_portfolio = $obj->get_port_details($id);
        if($get_portfolio->num_rows > 0){
            while($row = $get_portfolio->fetch_object()){
                unlink('uploads/portfolio/'.$row->portfolio_image);
                $status = $obj->delete_portfolio($id);
                if($status == true){
                    Flash_data::success('Portfolio Delete Successfully');
                    header('location:view_port_image.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_port_image.php');
                }
            }
        }
    }

?>