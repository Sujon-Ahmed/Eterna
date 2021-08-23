<?php
    session_start();
    include 'admin/flash_data.php';
    include 'admin/main.php';
    $obj = new Main();
    // condition check
    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        if($email != ''){
            $status = $obj->add_sub($email);
            // status check
            if($status == true){
                Flash_data::success('Thanks for Subscribe');
                header('location:index.php');
            }
        }
    }

?>