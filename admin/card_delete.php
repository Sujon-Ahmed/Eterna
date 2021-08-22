<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->card_details($id);
        if($result->num_rows > 0){
            while($results = $result->fetch_object()){
                $status = $obj->card_delete($id);

                if($status == true){
                    Flash_data::success('Card Delete Successfully');
                    header('location:view_card.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_card.php');
                }
            }
        }
    }
?>