<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $description = $obj->get_skill_desc_with_author_id($id);
        if($description->num_rows > 0){
            while($view = $description->fetch_object()){
                $status = $obj->delete_skill_desc($id);
                // check status
                if($status == true){
                    Flash_data::success('Skill Description Delete Successfully');
                    header('location:view_skill_desc.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_skill_desc.php');
                }
            }
        }
    }
?>