<?php
    session_start();
    include 'admin/flash_data.php';
    include 'admin/main.php';
    $obj = new Main();
    // condition check
    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        if($name != '' && $email != '' && $subject != '' && $message != ''){
            $status = $obj->add_msg($name,$email,$subject,$message);
            // status check
            if($status == true){
                Flash_data::success('Some Record Submitted');
                header('location:contact.php');
            }
        }
    }

?>