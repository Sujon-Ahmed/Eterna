<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:edit_blog_cat.php');
    }else{
        $id = $_POST['id'];
        $cat = $_POST['blog_cat_name'];
        $status = $obj->update_blog_cat($id,$cat);
        if($status == true){
            Flash_data::success('Blog Category Update Successfully');
            header('location:edit_blog_cat.php?id='.$id);
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:edit_blog_cat.php?id='.$id);
        }
    }

?>