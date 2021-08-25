<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:skill_desc_edit.php');
    }else{
        $id = $_POST['id'];
        $author = $_SESSION['id'];
        $desc = $_POST['skill_desc'];
        $status = $obj->update_skill_desc($id,$author,$desc);
        // check status 
        if($status == true){
            Flash_data::success('Skill Description Update Successfully');
            header('location:skill_desc_edit.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:skill_desc_edit.php?id='.$id);
        }
    }

?>