<?php
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();

    if(isset($_POST['submit'])){
        $port_cat_name = $_POST['port_cat_name'];
        $slug = strtolower(str_replace(' ','-',$_POST['port_cat_name']));
        $status = $obj->insert_port_cat($port_cat_name,$slug);
        if($status == true){
            Flash_data::success('category add successfully');
            header('location:cr_port_cat.php');
        }else{
            Flash_data::error('something went wrong!');
            header('location:cr_port_cat.php');
        }
    }

?>