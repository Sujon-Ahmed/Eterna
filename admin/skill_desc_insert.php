<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:skill_desc.php');
    }else{
        $author = $_SESSION['id'];
        $desc = $_POST['skill_desc'];
        $status = $obj->insert_skill_desc($author,$desc);
        // check status
        if($status == true){
            Flash_data::success('Our Skill Section Description Insert Successfully');
            header('location:skill_desc.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:skill_desc.php');
        }
    }

?>