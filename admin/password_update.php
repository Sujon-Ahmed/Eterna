<?php
session_start();
include "flash_data.php";
include "main.php";
$obj = new Main();
if(!isset($_POST['submit'])){
    header("location:change_password.php");
}else{
    $id = $_SESSION['id'];
    $cur_pass = md5($_POST['cur_password']);
    $new_pass = md5($_POST['new_password']);

    // $id = $_SESSION['id'];
    $profile_data = $obj->password_retrive($id);
    if($profile_data->num_rows > 0){
        while($row = $profile_data->fetch_object()){
            $db_pass= $row->admin_password;
        }
        if($db_pass === $cur_pass){
            $status = $obj->change_pass($id, $new_pass);
            if($status == true){
                Flash_data::success("Password Change Successfully");
                header("location:index.php");
            }else{
                Flash_data::error("Something Went Wrong!");
                header("location:index.php");
            }
        }else{
            Flash_data::error("Current Password Error!");
            header("location:change_password.php");
        }
    }
}

?>