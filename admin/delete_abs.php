<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->get_abs_card_details($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                $status = $obj->delete_abs($id);
                if($status == true){
                    Flash_data::success('Card Delete Successfully');
                    header('location:view_abs.php?id='.$id);
                }else{
                    Flash_data::success('Something Went Wrong!');
                    header('location:view_abs.php?id='.$id);
                }
            }
        }
    }

?>