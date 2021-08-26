<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->get_progress_id($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                $status = $obj->delete_progress($id);
                if($status == true){
                    Flash_data::success('Skill Progress Delete Successfully');
                    header('location:view_progress.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_progress.php');
                }
            }
        }
    }

?>