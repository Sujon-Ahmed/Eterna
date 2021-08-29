<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit'])){
        $cat_name = $_POST['blog_cat_name'];
        $status = $obj->insert_b_cat($cat_name);
        if($status == true){
            Flash_data::success('Blog Category Insert Successfully');
            header('location:cr_blog_cat.php');
        }else{
            Flash_data::error('Something Went Wrong!');
            header('location:cr_blog_cat.php');
        }
    }

?>