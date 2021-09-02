<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    // check get id
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $post = $obj->get_blog_details($id);
        if($post->num_rows > 0){
            while($blog = $post->fetch_object()){
               $status = $obj->blog_delete($id);
                // check status
                if($status == true){
                    Flash_data::success('Blog Delete Successfully');
                    header('location:view_b_post.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_b_post.php');
                }
            }
        }
    }
?>