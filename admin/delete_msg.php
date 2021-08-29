<?php 
    session_start();
    include 'flash_data.php';
    include 'main.php';
    $obj = new Main();
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $message = $obj->get_contact_msg($id);
        if($message->num_rows > 0){
            while($row = $message->fetch_object()){
                $status = $obj->delete_con_msg($id);
                if($status == true){
                    Flash_data::success('Message Delete Successfully');
                    header('location:view_msg.php');
                }else{
                    Flash_data::error('Something Went Wrong!');
                    header('location:view_msg.php');
                }
            }
        }
        
    }
?>