<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check submit post request
    if(isset($_POST['submit'])){
        $name = $_POST['social_name'];
        $icon = $_POST['social_icon'];
        $link = $_POST['social_link'];
        // status
        $status = $obj->insert_social($name,$icon,$link);
        // check status
        if($status == true){
            Flash_data::success('Social Insert Successfully');
            header('location:create_social.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:create_social.php');
        }
    }

?>