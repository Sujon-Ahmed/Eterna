<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:edit_port_cat.php');
    }else{
        $id = $_POST['id'];
        $name = $_POST['port_cat_name'];
        $slug = strtolower(str_replace(' ','-',$_POST['port_cat_name']));
        $status = $obj->update_port_cat($id,$name,$slug);
        if($status == true){
            Flash_data::success('Category update successfully');
            header('location:edit_port_cat.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:edit_port_cat.php?id='.$id);
        }
    }

?>